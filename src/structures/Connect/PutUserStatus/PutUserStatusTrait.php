<?php

namespace Sunaoka\Aws\Structures\Connect\PutUserStatus;

trait PutUserStatusTrait
{
    /**
     * @param PutUserStatusRequest $args
     * @return PutUserStatusResponse
     */
    public function putUserStatus(PutUserStatusRequest $args)
    {
        $result = parent::putUserStatus($args->toArray());
        return new PutUserStatusResponse($result->toArray());
    }
}
