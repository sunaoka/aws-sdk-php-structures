<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AcceleratorSelection> $selections
 * @property AcceleratorCountRange $count
 */
class AcceleratorCapabilities extends Shape
{
    /**
     * @param array{
     *     selections: list<AcceleratorSelection>,
     *     count?: AcceleratorCountRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
