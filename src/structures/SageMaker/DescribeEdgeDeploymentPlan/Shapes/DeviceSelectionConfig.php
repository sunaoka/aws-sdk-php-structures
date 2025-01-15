<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERCENTAGE'|'SELECTION'|'NAMECONTAINS' $DeviceSubsetType
 * @property int<min, 100>|null $Percentage
 * @property list<string>|null $DeviceNames
 * @property string|null $DeviceNameContains
 */
class DeviceSelectionConfig extends Shape
{
    /**
     * @param array{
     *     DeviceSubsetType: 'PERCENTAGE'|'SELECTION'|'NAMECONTAINS',
     *     Percentage?: int<min, 100>|null,
     *     DeviceNames?: list<string>|null,
     *     DeviceNameContains?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
