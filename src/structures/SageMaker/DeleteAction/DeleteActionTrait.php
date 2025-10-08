<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAction;

trait DeleteActionTrait
{
    /**
     * @param DeleteActionRequest $args
     * @return DeleteActionResponse
     */
    public function deleteAction(DeleteActionRequest $args)
    {
        $result = parent::deleteAction($args->toArray());
        return new DeleteActionResponse($result->toArray());
    }
}
