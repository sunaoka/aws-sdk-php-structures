<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DeploymentNumber
 * @property string $ConfigurationName
 * @property string $ConfigurationVersion
 * @property int<0, 1440> $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 * @property float $GrowthFactor
 * @property int<0, 1440> $FinalBakeTimeInMinutes
 * @property 'BAKING'|'VALIDATING'|'DEPLOYING'|'COMPLETE'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED' $State
 * @property float $PercentageComplete
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $CompletedAt
 * @property string $VersionLabel
 */
class DeploymentSummary extends Shape
{
    /**
     * @param array{
     *     DeploymentNumber?: int,
     *     ConfigurationName?: string,
     *     ConfigurationVersion?: string,
     *     DeploymentDurationInMinutes?: int<0, 1440>,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL',
     *     GrowthFactor?: float,
     *     FinalBakeTimeInMinutes?: int<0, 1440>,
     *     State?: 'BAKING'|'VALIDATING'|'DEPLOYING'|'COMPLETE'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED',
     *     PercentageComplete?: float,
     *     StartedAt?: \Aws\Api\DateTimeResult,
     *     CompletedAt?: \Aws\Api\DateTimeResult,
     *     VersionLabel?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
