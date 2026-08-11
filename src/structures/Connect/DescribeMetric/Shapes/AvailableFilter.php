<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'METRIC_LEVEL'|'RESOURCE_LEVEL'|null $Type
 */
class AvailableFilter extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'METRIC_LEVEL'|'RESOURCE_LEVEL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
