<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionLocalPortDetails $LocalPortDetails
 * @property ActionLocalIpDetails $LocalIpDetails
 * @property ActionRemoteIpDetails $RemoteIpDetails
 */
class PortProbeDetail extends Shape
{
    /**
     * @param array{
     *     LocalPortDetails?: ActionLocalPortDetails,
     *     LocalIpDetails?: ActionLocalIpDetails,
     *     RemoteIpDetails?: ActionRemoteIpDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
