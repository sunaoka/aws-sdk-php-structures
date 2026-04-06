<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMlflowApp;

trait UpdateMlflowAppTrait
{
    /**
     * @param UpdateMlflowAppRequest $args
     * @return UpdateMlflowAppResponse
     */
    public function updateMlflowApp(UpdateMlflowAppRequest $args)
    {
        $result = parent::updateMlflowApp($args->toArray());
        return new UpdateMlflowAppResponse($result->toArray());
    }
}
