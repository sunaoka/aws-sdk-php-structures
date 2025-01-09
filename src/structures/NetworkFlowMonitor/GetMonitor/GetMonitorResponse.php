<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 * @property list<Shapes\MonitorLocalResource> $localResources
 * @property list<Shapes\MonitorRemoteResource> $remoteResources
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string> $tags
 */
class GetMonitorResponse extends Response
{
}
