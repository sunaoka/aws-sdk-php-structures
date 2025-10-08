<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrantsInstance;

trait CreateAccessGrantsInstanceTrait
{
    /**
     * @param CreateAccessGrantsInstanceRequest $args
     * @return CreateAccessGrantsInstanceResponse
     */
    public function createAccessGrantsInstance(CreateAccessGrantsInstanceRequest $args)
    {
        $result = parent::createAccessGrantsInstance($args->toArray());
        return new CreateAccessGrantsInstanceResponse($result->toArray());
    }
}
