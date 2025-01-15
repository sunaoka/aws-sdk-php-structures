<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property double|null $EstimatedDiskUtilizationPercent
 * @property 'standard'|'high-performance'|null $Mode
 */
class NodeConfigurationOption extends Shape
{
    /**
     * @param array{
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     EstimatedDiskUtilizationPercent?: double|null,
     *     Mode?: 'standard'|'high-performance'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
