<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\GetMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $state
 * @property int $aggregationPeriod
 * @property array<string, string> $tags
 * @property list<Shapes\Probe> $probes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class GetMonitorResponse extends Response
{
}
