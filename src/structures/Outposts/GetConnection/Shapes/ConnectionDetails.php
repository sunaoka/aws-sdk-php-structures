<?php

namespace Sunaoka\Aws\Structures\Outposts\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientPublicKey
 * @property string|null $ServerPublicKey
 * @property string|null $ServerEndpoint
 * @property string|null $ClientTunnelAddress
 * @property string|null $ServerTunnelAddress
 * @property list<string>|null $AllowedIps
 */
class ConnectionDetails extends Shape
{
    /**
     * @param array{
     *     ClientPublicKey?: string|null,
     *     ServerPublicKey?: string|null,
     *     ServerEndpoint?: string|null,
     *     ClientTunnelAddress?: string|null,
     *     ServerTunnelAddress?: string|null,
     *     AllowedIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
