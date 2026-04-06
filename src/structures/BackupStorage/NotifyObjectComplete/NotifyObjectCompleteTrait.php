<?php

namespace Sunaoka\Aws\Structures\BackupStorage\NotifyObjectComplete;

trait NotifyObjectCompleteTrait
{
    /**
     * @param NotifyObjectCompleteRequest $args
     * @return NotifyObjectCompleteResponse
     */
    public function notifyObjectComplete(NotifyObjectCompleteRequest $args)
    {
        $result = parent::notifyObjectComplete($args->toArray());
        return new NotifyObjectCompleteResponse($result->toArray());
    }
}
