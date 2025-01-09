<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateProbe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property Shapes\ProbeInput $probe
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateProbeRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probe: Shapes\ProbeInput,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
