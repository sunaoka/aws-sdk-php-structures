<?php

namespace Sunaoka\Aws\Structures\Ec2\GetActiveVpnTunnelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AdditionalKeyExchangeRound
 * @property int|null $KeyExchangeMethod
 */
class ActiveVpnTunnelAdditionalKeyExchange extends Shape
{
    /**
     * @param array{
     *     AdditionalKeyExchangeRound?: int|null,
     *     KeyExchangeMethod?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
