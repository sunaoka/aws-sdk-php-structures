<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListDeploymentStrategies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property int $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 * @property float $GrowthFactor
 * @property int $FinalBakeTimeInMinutes
 * @property 'NONE'|'SSM_DOCUMENT' $ReplicateTo
 */
class DeploymentStrategy extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     DeploymentDurationInMinutes?: int,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL',
     *     GrowthFactor?: float,
     *     FinalBakeTimeInMinutes?: int,
     *     ReplicateTo?: 'NONE'|'SSM_DOCUMENT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
