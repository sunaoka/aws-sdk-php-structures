<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentStrategyId
 * @property string $Description
 * @property int<0, 1440> $DeploymentDurationInMinutes
 * @property int<0, 1440> $FinalBakeTimeInMinutes
 * @property float $GrowthFactor
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 */
class UpdateDeploymentStrategyRequest extends Request
{
    /**
     * @param array{
     *     DeploymentStrategyId: string,
     *     Description?: string,
     *     DeploymentDurationInMinutes?: int<0, 1440>,
     *     FinalBakeTimeInMinutes?: int<0, 1440>,
     *     GrowthFactor?: float,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
