<?php

namespace Sunaoka\Aws\Structures\Appflow\RegisterConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaConnectorProvisioningConfig $lambda
 */
class ConnectorProvisioningConfig extends Shape
{
    /**
     * @param array{lambda?: LambdaConnectorProvisioningConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
