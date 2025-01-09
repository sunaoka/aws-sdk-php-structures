<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\CreateMonitorProbeInput> $probes
 * @property int $aggregationPeriod
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probes?: list<Shapes\CreateMonitorProbeInput>,
     *     aggregationPeriod?: int,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
