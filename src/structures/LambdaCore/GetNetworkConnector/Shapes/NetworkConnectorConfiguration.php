<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetNetworkConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkConnectorVpcEgressConfiguration|null $VpcEgressConfiguration
 */
class NetworkConnectorConfiguration extends Shape
{
    /**
     * @param array{VpcEgressConfiguration?: NetworkConnectorVpcEgressConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
