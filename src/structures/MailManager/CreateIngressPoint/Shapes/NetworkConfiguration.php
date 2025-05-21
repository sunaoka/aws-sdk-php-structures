<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivateNetworkConfiguration|null $PrivateNetworkConfiguration
 * @property PublicNetworkConfiguration|null $PublicNetworkConfiguration
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     PrivateNetworkConfiguration?: PrivateNetworkConfiguration|null,
     *     PublicNetworkConfiguration?: PublicNetworkConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
