<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeleteCustomActionType;

trait DeleteCustomActionTypeTrait
{
    /**
     * @param DeleteCustomActionTypeRequest $args
     * @return void
     */
    public function deleteCustomActionType(DeleteCustomActionTypeRequest $args)
    {
        parent::deleteCustomActionType($args->toArray());
    }
}
