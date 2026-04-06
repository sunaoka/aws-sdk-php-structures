<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrantsInstance;

trait GetAccessGrantsInstanceTrait
{
    /**
     * @param GetAccessGrantsInstanceRequest $args
     * @return GetAccessGrantsInstanceResponse
     */
    public function getAccessGrantsInstance(GetAccessGrantsInstanceRequest $args)
    {
        $result = parent::getAccessGrantsInstance($args->toArray());
        return new GetAccessGrantsInstanceResponse($result->toArray());
    }
}
