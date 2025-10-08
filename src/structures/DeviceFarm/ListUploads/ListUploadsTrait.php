<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUploads;

trait ListUploadsTrait
{
    /**
     * @param ListUploadsRequest $args
     * @return ListUploadsResponse
     */
    public function listUploads(ListUploadsRequest $args)
    {
        $result = parent::listUploads($args->toArray());
        return new ListUploadsResponse($result->toArray());
    }
}
