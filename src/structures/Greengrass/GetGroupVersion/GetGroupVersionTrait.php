<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroupVersion;

trait GetGroupVersionTrait
{
    /**
     * @param GetGroupVersionRequest $args
     * @return GetGroupVersionResponse
     */
    public function getGroupVersion(GetGroupVersionRequest $args)
    {
        $result = parent::getGroupVersion($args->toArray());
        return new GetGroupVersionResponse($result->toArray());
    }
}
