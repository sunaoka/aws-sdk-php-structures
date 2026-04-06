<?php

namespace Sunaoka\Aws\Structures\BackupStorage\ListObjects;

trait ListObjectsTrait
{
    /**
     * @param ListObjectsRequest $args
     * @return ListObjectsResponse
     */
    public function listObjects(ListObjectsRequest $args)
    {
        $result = parent::listObjects($args->toArray());
        return new ListObjectsResponse($result->toArray());
    }
}
