<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bytes
 */
class PayloadPart extends Shape
{
    /**
     * @param array{Bytes?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
