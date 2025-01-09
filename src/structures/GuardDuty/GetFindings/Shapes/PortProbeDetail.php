<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalPortDetails $LocalPortDetails
 * @property LocalIpDetails $LocalIpDetails
 * @property RemoteIpDetails $RemoteIpDetails
 */
class PortProbeDetail extends Shape
{
    /**
     * @param array{
     *     LocalPortDetails?: LocalPortDetails,
     *     LocalIpDetails?: LocalIpDetails,
     *     RemoteIpDetails?: RemoteIpDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
