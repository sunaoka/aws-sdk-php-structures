<?php

namespace Sunaoka\Aws\Structures\BackupStorage\StartObject;

trait StartObjectTrait
{
    /**
     * @param StartObjectRequest $args
     * @return StartObjectResponse
     */
    public function startObject(StartObjectRequest $args)
    {
        $result = parent::startObject($args->toArray());
        return new StartObjectResponse($result->toArray());
    }
}
