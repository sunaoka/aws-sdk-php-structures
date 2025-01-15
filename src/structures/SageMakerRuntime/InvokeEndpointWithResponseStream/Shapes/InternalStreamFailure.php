<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class InternalStreamFailure extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
