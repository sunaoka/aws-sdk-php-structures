<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroupVersion;

trait CreateGroupVersionTrait
{
    /**
     * @param CreateGroupVersionRequest $args
     * @return CreateGroupVersionResponse
     */
    public function createGroupVersion(CreateGroupVersionRequest $args)
    {
        $result = parent::createGroupVersion($args->toArray());
        return new CreateGroupVersionResponse($result->toArray());
    }
}
