<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $state
 * @property int<30, max>|null $aggregationPeriod
 * @property array<string, string>|null $tags
 */
class CreateMonitorResponse extends Response
{
}
