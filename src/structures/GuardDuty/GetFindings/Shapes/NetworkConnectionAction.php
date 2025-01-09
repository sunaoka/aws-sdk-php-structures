<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Blocked
 * @property string $ConnectionDirection
 * @property LocalPortDetails $LocalPortDetails
 * @property string $Protocol
 * @property LocalIpDetails $LocalIpDetails
 * @property string $LocalNetworkInterface
 * @property RemoteIpDetails $RemoteIpDetails
 * @property RemotePortDetails $RemotePortDetails
 */
class NetworkConnectionAction extends Shape
{
    /**
     * @param array{
     *     Blocked?: bool,
     *     ConnectionDirection?: string,
     *     LocalPortDetails?: LocalPortDetails,
     *     Protocol?: string,
     *     LocalIpDetails?: LocalIpDetails,
     *     LocalNetworkInterface?: string,
     *     RemoteIpDetails?: RemoteIpDetails,
     *     RemotePortDetails?: RemotePortDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
