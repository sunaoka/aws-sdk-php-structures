<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaConfig|null $lambda
 */
class EndpointConfig extends Shape
{
    /**
     * @param array{lambda?: LambdaConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
