<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent;

trait CreateInferenceComponentTrait
{
    /**
     * @param CreateInferenceComponentRequest $args
     * @return CreateInferenceComponentResponse
     */
    public function createInferenceComponent(CreateInferenceComponentRequest $args)
    {
        $result = parent::createInferenceComponent($args->toArray());
        return new CreateInferenceComponentResponse($result->toArray());
    }
}
