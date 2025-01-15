<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $EnvironmentId
 * @property string|null $DeploymentStrategyId
 * @property string|null $ConfigurationProfileId
 * @property int|null $DeploymentNumber
 * @property string|null $ConfigurationName
 * @property string|null $ConfigurationLocationUri
 * @property string|null $ConfigurationVersion
 * @property string|null $Description
 * @property int<0, 1440>|null $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL'|null $GrowthType
 * @property float|null $GrowthFactor
 * @property int<0, 1440>|null $FinalBakeTimeInMinutes
 * @property 'BAKING'|'VALIDATING'|'DEPLOYING'|'COMPLETE'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED'|null $State
 * @property list<Shapes\DeploymentEvent>|null $EventLog
 * @property float|null $PercentageComplete
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 * @property list<Shapes\AppliedExtension>|null $AppliedExtensions
 * @property string|null $KmsKeyArn
 * @property string|null $KmsKeyIdentifier
 * @property string|null $VersionLabel
 */
class StartDeploymentResponse extends Response
{
}
