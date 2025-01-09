<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartDeleteMonitorDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $CloudWatchAlarmTemplateGroupIds
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $DiscoveryEntryPointArn
 * @property string $ErrorMessage
 * @property list<string> $EventBridgeRuleTemplateGroupIds
 * @property array<string, Shapes\MediaResource> $FailedMediaResourceMap
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastDiscoveredAt
 * @property Shapes\SuccessfulMonitorDeployment $LastSuccessfulMonitorDeployment
 * @property array<string, Shapes\MediaResource> $MediaResourceMap
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property bool $MonitorChangesPendingDeployment
 * @property Shapes\MonitorDeployment $MonitorDeployment
 * @property string $Name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_REVERTED'|'UPDATE_FAILED'|'READY'|'NOT_READY' $Status
 * @property array<string, string> $Tags
 */
class StartDeleteMonitorDeploymentResponse extends Response
{
}
