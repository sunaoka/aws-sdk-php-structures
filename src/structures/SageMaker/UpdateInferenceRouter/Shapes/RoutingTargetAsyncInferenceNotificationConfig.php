<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SuccessTopic
 * @property string|null $ErrorTopic
 */
class RoutingTargetAsyncInferenceNotificationConfig extends Shape
{
    /**
     * @param array{
     *     SuccessTopic?: string|null,
     *     ErrorTopic?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
