<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaConfiguration $Lambda
 */
class ProcessorConfiguration extends Shape
{
    /**
     * @param array{Lambda: LambdaConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
