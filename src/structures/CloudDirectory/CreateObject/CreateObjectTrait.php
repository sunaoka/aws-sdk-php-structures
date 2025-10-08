<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateObject;

trait CreateObjectTrait
{
    /**
     * @param CreateObjectRequest $args
     * @return CreateObjectResponse
     */
    public function createObject(CreateObjectRequest $args)
    {
        $result = parent::createObject($args->toArray());
        return new CreateObjectResponse($result->toArray());
    }
}
