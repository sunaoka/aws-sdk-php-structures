<?php

namespace Sunaoka\Aws\Structures\Outposts\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientPublicKey
 * @property string $ServerPublicKey
 * @property string $ServerEndpoint
 * @property string $ClientTunnelAddress
 * @property string $ServerTunnelAddress
 * @property list<string> $AllowedIps
 */
class ConnectionDetails extends Shape
{
    /**
     * @param array{
     *     ClientPublicKey?: string,
     *     ServerPublicKey?: string,
     *     ServerEndpoint?: string,
     *     ClientTunnelAddress?: string,
     *     ServerTunnelAddress?: string,
     *     AllowedIps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
