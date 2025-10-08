<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAction;

trait CreateActionTrait
{
    /**
     * @param CreateActionRequest $args
     * @return CreateActionResponse
     */
    public function createAction(CreateActionRequest $args)
    {
        $result = parent::createAction($args->toArray());
        return new CreateActionResponse($result->toArray());
    }
}
