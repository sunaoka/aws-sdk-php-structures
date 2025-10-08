<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateActionTarget;

trait UpdateActionTargetTrait
{
    /**
     * @param UpdateActionTargetRequest $args
     * @return UpdateActionTargetResponse
     */
    public function updateActionTarget(UpdateActionTargetRequest $args)
    {
        $result = parent::updateActionTarget($args->toArray());
        return new UpdateActionTargetResponse($result->toArray());
    }
}
