<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateConnectionGroup;

trait CreateConnectionGroupTrait
{
    /**
     * @param CreateConnectionGroupRequest $args
     * @return CreateConnectionGroupResponse
     */
    public function createConnectionGroup(CreateConnectionGroupRequest $args)
    {
        $result = parent::createConnectionGroup($args->toArray());
        return new CreateConnectionGroupResponse($result->toArray());
    }
}
