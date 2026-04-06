<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $ErrorCode
 */
class ModelStreamError extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     ErrorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
