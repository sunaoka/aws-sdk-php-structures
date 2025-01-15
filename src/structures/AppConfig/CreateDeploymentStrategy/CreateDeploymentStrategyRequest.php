<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property int<0, 1440> $DeploymentDurationInMinutes
 * @property int<0, 1440>|null $FinalBakeTimeInMinutes
 * @property float $GrowthFactor
 * @property 'LINEAR'|'EXPONENTIAL'|null $GrowthType
 * @property 'NONE'|'SSM_DOCUMENT'|null $ReplicateTo
 * @property array<string, string>|null $Tags
 */
class CreateDeploymentStrategyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DeploymentDurationInMinutes: int<0, 1440>,
     *     FinalBakeTimeInMinutes?: int<0, 1440>|null,
     *     GrowthFactor: float,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL'|null,
     *     ReplicateTo?: 'NONE'|'SSM_DOCUMENT'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
