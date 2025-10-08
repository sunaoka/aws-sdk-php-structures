<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteActionTarget;

trait DeleteActionTargetTrait
{
    /**
     * @param DeleteActionTargetRequest $args
     * @return DeleteActionTargetResponse
     */
    public function deleteActionTarget(DeleteActionTargetRequest $args)
    {
        $result = parent::deleteActionTarget($args->toArray());
        return new DeleteActionTargetResponse($result->toArray());
    }
}
