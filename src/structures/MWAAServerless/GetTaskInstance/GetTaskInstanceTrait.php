<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetTaskInstance;

trait GetTaskInstanceTrait
{
    /**
     * @param GetTaskInstanceRequest $args
     * @return GetTaskInstanceResponse
     */
    public function getTaskInstance(GetTaskInstanceRequest $args)
    {
        $result = parent::getTaskInstance($args->toArray());
        return new GetTaskInstanceResponse($result->toArray());
    }
}
