<?php

namespace Sunaoka\Aws\Structures\StorageGateway\NotifyWhenUploaded;

trait NotifyWhenUploadedTrait
{
    /**
     * @param NotifyWhenUploadedRequest $args
     * @return NotifyWhenUploadedResponse
     */
    public function notifyWhenUploaded(NotifyWhenUploadedRequest $args)
    {
        $result = parent::notifyWhenUploaded($args->toArray());
        return new NotifyWhenUploadedResponse($result->toArray());
    }
}
