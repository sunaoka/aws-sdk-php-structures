<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAction;

trait UpdateActionTrait
{
    /**
     * @param UpdateActionRequest $args
     * @return UpdateActionResponse
     */
    public function updateAction(UpdateActionRequest $args)
    {
        $result = parent::updateAction($args->toArray());
        return new UpdateActionResponse($result->toArray());
    }
}
