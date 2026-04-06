<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ABSOLUTE'|'RELATIVE' $type
 * @property string $value
 */
class DateTimeValue extends Shape
{
    /**
     * @param array{
     *     type: 'ABSOLUTE'|'RELATIVE',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
