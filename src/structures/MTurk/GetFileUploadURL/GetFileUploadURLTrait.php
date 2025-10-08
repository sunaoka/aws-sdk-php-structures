<?php

namespace Sunaoka\Aws\Structures\MTurk\GetFileUploadURL;

trait GetFileUploadURLTrait
{
    /**
     * @param GetFileUploadURLRequest $args
     * @return GetFileUploadURLResponse
     */
    public function getFileUploadURL(GetFileUploadURLRequest $args)
    {
        $result = parent::getFileUploadURL($args->toArray());
        return new GetFileUploadURLResponse($result->toArray());
    }
}
