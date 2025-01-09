<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property double $EstimatedDiskUtilizationPercent
 * @property 'standard'|'high-performance' $Mode
 */
class NodeConfigurationOption extends Shape
{
    /**
     * @param array{
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     EstimatedDiskUtilizationPercent?: double,
     *     Mode?: 'standard'|'high-performance'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
