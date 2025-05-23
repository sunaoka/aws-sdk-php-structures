<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaConnectorProvisioningConfig|null $lambda
 */
class ConnectorProvisioningConfig extends Shape
{
    /**
     * @param array{lambda?: LambdaConnectorProvisioningConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
