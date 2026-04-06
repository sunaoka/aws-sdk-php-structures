<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteInferenceComponent;

trait DeleteInferenceComponentTrait
{
    /**
     * @param DeleteInferenceComponentRequest $args
     * @return void
     */
    public function deleteInferenceComponent(DeleteInferenceComponentRequest $args)
    {
        parent::deleteInferenceComponent($args->toArray());
    }
}
