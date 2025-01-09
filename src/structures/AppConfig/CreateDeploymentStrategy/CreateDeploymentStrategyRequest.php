<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property int $DeploymentDurationInMinutes
 * @property int $FinalBakeTimeInMinutes
 * @property float $GrowthFactor
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 * @property 'NONE'|'SSM_DOCUMENT' $ReplicateTo
 * @property array<string, string> $Tags
 */
class CreateDeploymentStrategyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DeploymentDurationInMinutes: int,
     *     FinalBakeTimeInMinutes?: int,
     *     GrowthFactor: float,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL',
     *     ReplicateTo?: 'NONE'|'SSM_DOCUMENT',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
