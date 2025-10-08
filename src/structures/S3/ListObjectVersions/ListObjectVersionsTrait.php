<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions;

trait ListObjectVersionsTrait
{
    /**
     * @param ListObjectVersionsRequest $args
     * @return ListObjectVersionsResponse
     */
    public function listObjectVersions(ListObjectVersionsRequest $args)
    {
        $result = parent::listObjectVersions($args->toArray());
        return new ListObjectVersionsResponse($result->toArray());
    }
}
