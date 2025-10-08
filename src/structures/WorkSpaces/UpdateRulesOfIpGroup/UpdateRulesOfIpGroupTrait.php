<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateRulesOfIpGroup;

trait UpdateRulesOfIpGroupTrait
{
    /**
     * @param UpdateRulesOfIpGroupRequest $args
     * @return UpdateRulesOfIpGroupResponse
     */
    public function updateRulesOfIpGroup(UpdateRulesOfIpGroupRequest $args)
    {
        $result = parent::updateRulesOfIpGroup($args->toArray());
        return new UpdateRulesOfIpGroupResponse($result->toArray());
    }
}
