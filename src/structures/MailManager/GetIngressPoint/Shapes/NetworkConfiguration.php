<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicNetworkConfiguration|null $PublicNetworkConfiguration
 * @property PrivateNetworkConfiguration|null $PrivateNetworkConfiguration
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     PublicNetworkConfiguration?: PublicNetworkConfiguration|null,
     *     PrivateNetworkConfiguration?: PrivateNetworkConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
