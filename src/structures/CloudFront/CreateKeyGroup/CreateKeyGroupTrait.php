<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateKeyGroup;

trait CreateKeyGroupTrait
{
    /**
     * @param CreateKeyGroupRequest $args
     * @return CreateKeyGroupResponse
     */
    public function createKeyGroup(CreateKeyGroupRequest $args)
    {
        $result = parent::createKeyGroup($args->toArray());
        return new CreateKeyGroupResponse($result->toArray());
    }
}
