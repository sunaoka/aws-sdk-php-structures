<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachObject;

trait AttachObjectTrait
{
    /**
     * @param AttachObjectRequest $args
     * @return AttachObjectResponse
     */
    public function attachObject(AttachObjectRequest $args)
    {
        $result = parent::attachObject($args->toArray());
        return new AttachObjectResponse($result->toArray());
    }
}
