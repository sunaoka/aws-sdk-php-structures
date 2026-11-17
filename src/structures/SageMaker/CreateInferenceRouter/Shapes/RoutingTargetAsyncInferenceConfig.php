<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingTargetAsyncInferenceOutputConfig $OutputConfig
 * @property RoutingTargetAsyncInferenceClientConfig|null $ClientConfig
 */
class RoutingTargetAsyncInferenceConfig extends Shape
{
    /**
     * @param array{
     *     OutputConfig: RoutingTargetAsyncInferenceOutputConfig,
     *     ClientConfig?: RoutingTargetAsyncInferenceClientConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
