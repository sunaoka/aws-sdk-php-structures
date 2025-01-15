<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DeploymentNumber
 * @property string|null $ConfigurationName
 * @property string|null $ConfigurationVersion
 * @property int<0, 1440>|null $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL'|null $GrowthType
 * @property float|null $GrowthFactor
 * @property int<0, 1440>|null $FinalBakeTimeInMinutes
 * @property 'BAKING'|'VALIDATING'|'DEPLOYING'|'COMPLETE'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED'|null $State
 * @property float|null $PercentageComplete
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 * @property string|null $VersionLabel
 */
class DeploymentSummary extends Shape
{
    /**
     * @param array{
     *     DeploymentNumber?: int|null,
     *     ConfigurationName?: string|null,
     *     ConfigurationVersion?: string|null,
     *     DeploymentDurationInMinutes?: int<0, 1440>|null,
     *     GrowthType?: 'LINEAR'|'EXPONENTIAL'|null,
     *     GrowthFactor?: float|null,
     *     FinalBakeTimeInMinutes?: int<0, 1440>|null,
     *     State?: 'BAKING'|'VALIDATING'|'DEPLOYING'|'COMPLETE'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED'|null,
     *     PercentageComplete?: float|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     CompletedAt?: \Aws\Api\DateTimeResult|null,
     *     VersionLabel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
