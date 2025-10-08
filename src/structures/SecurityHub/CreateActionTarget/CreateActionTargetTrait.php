<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateActionTarget;

trait CreateActionTargetTrait
{
    /**
     * @param CreateActionTargetRequest $args
     * @return CreateActionTargetResponse
     */
    public function createActionTarget(CreateActionTargetRequest $args)
    {
        $result = parent::createActionTarget($args->toArray());
        return new CreateActionTargetResponse($result->toArray());
    }
}
