<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartUpdateSignalMap;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $CloudWatchAlarmTemplateGroupIds
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property string|null $DiscoveryEntryPointArn
 * @property string|null $ErrorMessage
 * @property list<string>|null $EventBridgeRuleTemplateGroupIds
 * @property array<string, Shapes\MediaResource>|null $FailedMediaResourceMap
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastDiscoveredAt
 * @property Shapes\SuccessfulMonitorDeployment|null $LastSuccessfulMonitorDeployment
 * @property array<string, Shapes\MediaResource>|null $MediaResourceMap
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property bool|null $MonitorChangesPendingDeployment
 * @property Shapes\MonitorDeployment|null $MonitorDeployment
 * @property string|null $Name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_REVERTED'|'UPDATE_FAILED'|'READY'|'NOT_READY'|null $Status
 * @property array<string, string>|null $Tags
 */
class StartUpdateSignalMapResponse extends Response
{
}
