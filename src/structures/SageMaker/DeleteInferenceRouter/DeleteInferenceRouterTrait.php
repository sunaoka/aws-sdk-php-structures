<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteInferenceRouter;

trait DeleteInferenceRouterTrait
{
    /**
     * @param DeleteInferenceRouterRequest $args
     * @return void
     */
    public function deleteInferenceRouter(DeleteInferenceRouterRequest $args)
    {
        parent::deleteInferenceRouter($args->toArray());
    }
}
