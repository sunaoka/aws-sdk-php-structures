<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $state
 * @property int $aggregationPeriod
 * @property array<string, string> $tags
 */
class UpdateMonitorResponse extends Response
{
}
