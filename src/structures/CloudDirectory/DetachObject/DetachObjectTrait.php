<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachObject;

trait DetachObjectTrait
{
    /**
     * @param DetachObjectRequest $args
     * @return DetachObjectResponse
     */
    public function detachObject(DetachObjectRequest $args)
    {
        $result = parent::detachObject($args->toArray());
        return new DetachObjectResponse($result->toArray());
    }
}
