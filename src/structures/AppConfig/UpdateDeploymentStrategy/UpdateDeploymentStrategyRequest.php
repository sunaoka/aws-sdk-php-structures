<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentStrategyId
 * @property string $Description
 * @property int $DeploymentDurationInMinutes
 * @property int $FinalBakeTimeInMinutes
 * @property float $GrowthFactor
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 */
class UpdateDeploymentStrategyRequest extends Request
{
    /**
     * @param array{
     *     DeploymentStrategyId: string,
     *     Description?: string,
     *     DeploymentDurationInMinutes?: int,
     *     FinalBakeTimeInMinutes?: int,
     *     GrowthFactor?: float,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
