<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceConfigurationArn
 */
class ConnectivityResourceConfigurationArn extends Shape
{
    /**
     * @param array{ResourceConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
