<?php

namespace Sunaoka\Aws\Structures\Swf\DeprecateWorkflowType;

trait DeprecateWorkflowTypeTrait
{
    /**
     * @param DeprecateWorkflowTypeRequest $args
     * @return void
     */
    public function deprecateWorkflowType(DeprecateWorkflowTypeRequest $args)
    {
        parent::deprecateWorkflowType($args->toArray());
    }
}
