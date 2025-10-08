<?php

namespace Sunaoka\Aws\Structures\Iam\CreateAccessKey;

trait CreateAccessKeyTrait
{
    /**
     * @param CreateAccessKeyRequest $args
     * @return CreateAccessKeyResponse
     */
    public function createAccessKey(CreateAccessKeyRequest $args)
    {
        $result = parent::createAccessKey($args->toArray());
        return new CreateAccessKeyResponse($result->toArray());
    }
}
