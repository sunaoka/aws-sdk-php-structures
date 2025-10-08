<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInputSecurityGroup;

trait CreateInputSecurityGroupTrait
{
    /**
     * @param CreateInputSecurityGroupRequest $args
     * @return CreateInputSecurityGroupResponse
     */
    public function createInputSecurityGroup(CreateInputSecurityGroupRequest $args)
    {
        $result = parent::createInputSecurityGroup($args->toArray());
        return new CreateInputSecurityGroupResponse($result->toArray());
    }
}
