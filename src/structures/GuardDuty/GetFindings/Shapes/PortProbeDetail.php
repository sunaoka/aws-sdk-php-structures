<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalPortDetails|null $LocalPortDetails
 * @property LocalIpDetails|null $LocalIpDetails
 * @property RemoteIpDetails|null $RemoteIpDetails
 */
class PortProbeDetail extends Shape
{
    /**
     * @param array{
     *     LocalPortDetails?: LocalPortDetails|null,
     *     LocalIpDetails?: LocalIpDetails|null,
     *     RemoteIpDetails?: RemoteIpDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
