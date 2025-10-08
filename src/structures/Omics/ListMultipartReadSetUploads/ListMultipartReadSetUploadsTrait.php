<?php

namespace Sunaoka\Aws\Structures\Omics\ListMultipartReadSetUploads;

trait ListMultipartReadSetUploadsTrait
{
    /**
     * @param ListMultipartReadSetUploadsRequest $args
     * @return ListMultipartReadSetUploadsResponse
     */
    public function listMultipartReadSetUploads(ListMultipartReadSetUploadsRequest $args)
    {
        $result = parent::listMultipartReadSetUploads($args->toArray());
        return new ListMultipartReadSetUploadsResponse($result->toArray());
    }
}
