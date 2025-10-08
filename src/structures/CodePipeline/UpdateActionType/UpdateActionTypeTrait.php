<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType;

trait UpdateActionTypeTrait
{
    /**
     * @param UpdateActionTypeRequest $args
     * @return void
     */
    public function updateActionType(UpdateActionTypeRequest $args)
    {
        parent::updateActionType($args->toArray());
    }
}
