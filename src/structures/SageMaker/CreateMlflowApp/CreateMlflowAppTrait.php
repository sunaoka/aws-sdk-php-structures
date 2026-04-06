<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMlflowApp;

trait CreateMlflowAppTrait
{
    /**
     * @param CreateMlflowAppRequest $args
     * @return CreateMlflowAppResponse
     */
    public function createMlflowApp(CreateMlflowAppRequest $args)
    {
        $result = parent::createMlflowApp($args->toArray());
        return new CreateMlflowAppResponse($result->toArray());
    }
}
