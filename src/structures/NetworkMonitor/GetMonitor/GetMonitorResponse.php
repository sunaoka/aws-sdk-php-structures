<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\GetMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $state
 * @property int<30, max> $aggregationPeriod
 * @property array<string, string>|null $tags
 * @property list<Shapes\Probe>|null $probes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class GetMonitorResponse extends Response
{
}
