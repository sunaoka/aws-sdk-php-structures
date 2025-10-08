<?php

namespace Sunaoka\Aws\Structures\Glacier\ListMultipartUploads;

trait ListMultipartUploadsTrait
{
    /**
     * @param ListMultipartUploadsRequest $args
     * @return ListMultipartUploadsResponse
     */
    public function listMultipartUploads(ListMultipartUploadsRequest $args)
    {
        $result = parent::listMultipartUploads($args->toArray());
        return new ListMultipartUploadsResponse($result->toArray());
    }
}
