<?php

interface Visitor
{
    public function visit(Visitable $visitable);
}
interface Visitable
{
    public function accept(Visitor $visitor);
}
class ConcreteVisitable implements Visitable
{
    public $items = array();

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visit($this);
    }
}
class ConcreteVisitor implements Visitor
{
    protected $info;

    public function visit(Visitable $visitable)
    {
        echo "Object: ", get_class($visitable), "\n";
        $items = get_object_vars($visitable)['items'];

        foreach ($items as $index => $value) {
            echo $index . " : ", $value, "\n";
        }
    }
}
// Usage example
$ConcreteVisitable = new ConcreteVisitable();
$ConcreteVisitor = new ConcreteVisitor();
$ConcreteVisitable->addItem('item 1');
$ConcreteVisitable->addItem('item 2');
$ConcreteVisitable->addItem('item 3');
$ConcreteVisitable->accept($ConcreteVisitor);