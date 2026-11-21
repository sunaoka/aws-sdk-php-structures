<?php

namespace Sunaoka\Aws\Structures\SageMakerGatewayRuntime\InvokeGlobalInferenceGatewayWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property 'StreamBroken'|'ModelInvocationTimeExceeded'|null $ErrorCode
 */
class ModelStreamError extends Shape
{
    /**
     * @param array{
     *     Message: string,
     *     ErrorCode?: 'StreamBroken'|'ModelInvocationTimeExceeded'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
