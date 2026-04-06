<?php

namespace Sunaoka\Aws\Structures\Swf\DeleteWorkflowType;

trait DeleteWorkflowTypeTrait
{
    /**
     * @param DeleteWorkflowTypeRequest $args
     * @return void
     */
    public function deleteWorkflowType(DeleteWorkflowTypeRequest $args)
    {
        parent::deleteWorkflowType($args->toArray());
    }
}
