<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreateCustomActionType;

trait CreateCustomActionTypeTrait
{
    /**
     * @param CreateCustomActionTypeRequest $args
     * @return CreateCustomActionTypeResponse
     */
    public function createCustomActionType(CreateCustomActionTypeRequest $args)
    {
        $result = parent::createCustomActionType($args->toArray());
        return new CreateCustomActionTypeResponse($result->toArray());
    }
}
