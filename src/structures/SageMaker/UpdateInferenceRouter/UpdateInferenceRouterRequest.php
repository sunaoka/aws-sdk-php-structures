<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRouterName
 * @property list<Shapes\RoutingTarget> $RoutingTargets
 */
class UpdateInferenceRouterRequest extends Request
{
    /**
     * @param array{
     *     InferenceRouterName: string,
     *     RoutingTargets: list<Shapes\RoutingTarget>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
