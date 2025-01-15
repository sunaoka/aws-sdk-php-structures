<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateProbe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property Shapes\ProbeInput $probe
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateProbeRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probe: Shapes\ProbeInput,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
