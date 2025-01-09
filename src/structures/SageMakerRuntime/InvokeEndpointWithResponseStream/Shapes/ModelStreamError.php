<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $ErrorCode
 */
class ModelStreamError extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     ErrorCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
