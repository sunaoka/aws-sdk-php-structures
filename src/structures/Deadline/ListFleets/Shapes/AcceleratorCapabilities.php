<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AcceleratorSelection> $selections
 * @property AcceleratorCountRange|null $count
 */
class AcceleratorCapabilities extends Shape
{
    /**
     * @param array{
     *     selections: list<AcceleratorSelection>,
     *     count?: AcceleratorCountRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
