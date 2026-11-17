<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRouters;

trait ListInferenceRoutersTrait
{
    /**
     * @param ListInferenceRoutersRequest $args
     * @return ListInferenceRoutersResponse
     */
    public function listInferenceRouters(ListInferenceRoutersRequest $args)
    {
        $result = parent::listInferenceRouters($args->toArray());
        return new ListInferenceRoutersResponse($result->toArray());
    }
}
