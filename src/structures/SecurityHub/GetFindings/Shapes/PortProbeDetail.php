<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionLocalPortDetails|null $LocalPortDetails
 * @property ActionLocalIpDetails|null $LocalIpDetails
 * @property ActionRemoteIpDetails|null $RemoteIpDetails
 */
class PortProbeDetail extends Shape
{
    /**
     * @param array{
     *     LocalPortDetails?: ActionLocalPortDetails|null,
     *     LocalIpDetails?: ActionLocalIpDetails|null,
     *     RemoteIpDetails?: ActionRemoteIpDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
