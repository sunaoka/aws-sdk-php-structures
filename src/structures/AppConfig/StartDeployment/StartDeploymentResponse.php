<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property string $DeploymentStrategyId
 * @property string $ConfigurationProfileId
 * @property int $DeploymentNumber
 * @property string $ConfigurationName
 * @property string $ConfigurationLocationUri
 * @property string $ConfigurationVersion
 * @property string $Description
 * @property int<0, 1440> $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 * @property float $GrowthFactor
 * @property int<0, 1440> $FinalBakeTimeInMinutes
 * @property 'BAKING'|'VALIDATING'|'DEPLOYING'|'COMPLETE'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED' $State
 * @property list<Shapes\DeploymentEvent> $EventLog
 * @property float $PercentageComplete
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $CompletedAt
 * @property list<Shapes\AppliedExtension> $AppliedExtensions
 * @property string $KmsKeyArn
 * @property string $KmsKeyIdentifier
 * @property string $VersionLabel
 */
class StartDeploymentResponse extends Response
{
}
