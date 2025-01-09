<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAvailabilityOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Options
 * @property OptionStatus $Status
 */
class AvailabilityOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: bool,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
