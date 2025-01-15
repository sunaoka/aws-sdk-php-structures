<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListDeploymentStrategies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property int<0, 1440>|null $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL'|null $GrowthType
 * @property float|null $GrowthFactor
 * @property int<0, 1440>|null $FinalBakeTimeInMinutes
 * @property 'NONE'|'SSM_DOCUMENT'|null $ReplicateTo
 */
class DeploymentStrategy extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     DeploymentDurationInMinutes?: int<0, 1440>|null,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL'|null,
     *     GrowthFactor?: float|null,
     *     FinalBakeTimeInMinutes?: int<0, 1440>|null,
     *     ReplicateTo?: 'NONE'|'SSM_DOCUMENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
