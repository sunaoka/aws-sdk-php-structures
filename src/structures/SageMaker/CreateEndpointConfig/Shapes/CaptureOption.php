<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Input'|'Output' $CaptureMode
 */
class CaptureOption extends Shape
{
    /**
     * @param array{CaptureMode: 'Input'|'Output'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
