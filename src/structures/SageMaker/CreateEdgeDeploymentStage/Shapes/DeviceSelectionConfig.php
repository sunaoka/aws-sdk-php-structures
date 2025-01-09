<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERCENTAGE'|'SELECTION'|'NAMECONTAINS' $DeviceSubsetType
 * @property int $Percentage
 * @property list<string> $DeviceNames
 * @property string $DeviceNameContains
 */
class DeviceSelectionConfig extends Shape
{
    /**
     * @param array{
     *     DeviceSubsetType: 'PERCENTAGE'|'SELECTION'|'NAMECONTAINS',
     *     Percentage?: int,
     *     DeviceNames?: list<string>,
     *     DeviceNameContains?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
