<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionDirection
 * @property ActionRemoteIpDetails $RemoteIpDetails
 * @property ActionRemotePortDetails $RemotePortDetails
 * @property ActionLocalPortDetails $LocalPortDetails
 * @property string $Protocol
 * @property bool $Blocked
 */
class NetworkConnectionAction extends Shape
{
    /**
     * @param array{
     *     ConnectionDirection?: string,
     *     RemoteIpDetails?: ActionRemoteIpDetails,
     *     RemotePortDetails?: ActionRemotePortDetails,
     *     LocalPortDetails?: ActionLocalPortDetails,
     *     Protocol?: string,
     *     Blocked?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
