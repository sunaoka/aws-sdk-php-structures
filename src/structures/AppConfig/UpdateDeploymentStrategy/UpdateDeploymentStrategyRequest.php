<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentStrategyId
 * @property string|null $Description
 * @property int<0, 1440>|null $DeploymentDurationInMinutes
 * @property int<0, 1440>|null $FinalBakeTimeInMinutes
 * @property float|null $GrowthFactor
 * @property 'LINEAR'|'EXPONENTIAL'|null $GrowthType
 */
class UpdateDeploymentStrategyRequest extends Request
{
    /**
     * @param array{
     *     DeploymentStrategyId: string,
     *     Description?: string|null,
     *     DeploymentDurationInMinutes?: int<0, 1440>|null,
     *     FinalBakeTimeInMinutes?: int<0, 1440>|null,
     *     GrowthFactor?: float|null,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
