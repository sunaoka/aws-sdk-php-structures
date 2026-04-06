<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Blocked
 * @property string|null $ConnectionDirection
 * @property LocalPortDetails|null $LocalPortDetails
 * @property string|null $Protocol
 * @property LocalIpDetails|null $LocalIpDetails
 * @property string|null $LocalNetworkInterface
 * @property RemoteIpDetails|null $RemoteIpDetails
 * @property RemotePortDetails|null $RemotePortDetails
 */
class NetworkConnectionAction extends Shape
{
    /**
     * @param array{
     *     Blocked?: bool|null,
     *     ConnectionDirection?: string|null,
     *     LocalPortDetails?: LocalPortDetails|null,
     *     Protocol?: string|null,
     *     LocalIpDetails?: LocalIpDetails|null,
     *     LocalNetworkInterface?: string|null,
     *     RemoteIpDetails?: RemoteIpDetails|null,
     *     RemotePortDetails?: RemotePortDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
