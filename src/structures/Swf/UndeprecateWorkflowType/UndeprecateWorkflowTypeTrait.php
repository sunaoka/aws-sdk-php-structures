<?php

namespace Sunaoka\Aws\Structures\Swf\UndeprecateWorkflowType;

trait UndeprecateWorkflowTypeTrait
{
    /**
     * @param UndeprecateWorkflowTypeRequest $args
     * @return void
     */
    public function undeprecateWorkflowType(UndeprecateWorkflowTypeRequest $args)
    {
        parent::undeprecateWorkflowType($args->toArray());
    }
}
