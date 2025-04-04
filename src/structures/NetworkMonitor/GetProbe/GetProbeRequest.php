<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\GetProbe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $probeId
 */
class GetProbeRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
