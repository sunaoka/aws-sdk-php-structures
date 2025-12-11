<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteMlflowApp;

trait DeleteMlflowAppTrait
{
    /**
     * @param DeleteMlflowAppRequest $args
     * @return DeleteMlflowAppResponse
     */
    public function deleteMlflowApp(DeleteMlflowAppRequest $args)
    {
        $result = parent::deleteMlflowApp($args->toArray());
        return new DeleteMlflowAppResponse($result->toArray());
    }
}
