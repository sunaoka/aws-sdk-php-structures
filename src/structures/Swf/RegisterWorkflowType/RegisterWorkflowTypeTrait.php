<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterWorkflowType;

trait RegisterWorkflowTypeTrait
{
    /**
     * @param RegisterWorkflowTypeRequest $args
     * @return void
     */
    public function registerWorkflowType(RegisterWorkflowTypeRequest $args)
    {
        parent::registerWorkflowType($args->toArray());
    }
}
