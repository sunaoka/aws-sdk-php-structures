<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType;

trait GetActionTypeTrait
{
    /**
     * @param GetActionTypeRequest $args
     * @return GetActionTypeResponse
     */
    public function getActionType(GetActionTypeRequest $args)
    {
        $result = parent::getActionType($args->toArray());
        return new GetActionTypeResponse($result->toArray());
    }
}
