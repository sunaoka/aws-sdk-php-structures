<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectivityResourceConfigurationArn $ResourceParameters
 */
class ConnectivityResourceParameters extends Shape
{
    /**
     * @param array{ResourceParameters: ConnectivityResourceConfigurationArn} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
