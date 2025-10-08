<?php

namespace Sunaoka\Aws\Structures\Rds\CreateOptionGroup;

trait CreateOptionGroupTrait
{
    /**
     * @param CreateOptionGroupRequest $args
     * @return CreateOptionGroupResponse
     */
    public function createOptionGroup(CreateOptionGroupRequest $args)
    {
        $result = parent::createOptionGroup($args->toArray());
        return new CreateOptionGroupResponse($result->toArray());
    }
}
