<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 * @property list<Shapes\MonitorLocalResource> $localResources
 * @property list<Shapes\MonitorRemoteResource> $remoteResources
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string>|null $tags
 */
class UpdateMonitorResponse extends Response
{
}
