<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyOptionGroup;

trait ModifyOptionGroupTrait
{
    /**
     * @param ModifyOptionGroupRequest $args
     * @return ModifyOptionGroupResponse
     */
    public function modifyOptionGroup(ModifyOptionGroupRequest $args)
    {
        $result = parent::modifyOptionGroup($args->toArray());
        return new ModifyOptionGroupResponse($result->toArray());
    }
}
