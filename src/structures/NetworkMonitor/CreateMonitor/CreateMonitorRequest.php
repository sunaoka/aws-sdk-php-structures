<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\CreateMonitorProbeInput>|null $probes
 * @property int<30, max>|null $aggregationPeriod
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probes?: list<Shapes\CreateMonitorProbeInput>|null,
     *     aggregationPeriod?: int<30, max>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
