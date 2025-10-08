<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceComponents;

trait ListInferenceComponentsTrait
{
    /**
     * @param ListInferenceComponentsRequest $args
     * @return ListInferenceComponentsResponse
     */
    public function listInferenceComponents(ListInferenceComponentsRequest $args)
    {
        $result = parent::listInferenceComponents($args->toArray());
        return new ListInferenceComponentsResponse($result->toArray());
    }
}
