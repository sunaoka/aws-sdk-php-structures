<?php

namespace Sunaoka\Aws\Structures\S3Files\ListFileSystems;

trait ListFileSystemsTrait
{
    /**
     * @param ListFileSystemsRequest $args
     * @return ListFileSystemsResponse
     */
    public function listFileSystems(ListFileSystemsRequest $args)
    {
        $result = parent::listFileSystems($args->toArray());
        return new ListFileSystemsResponse($result->toArray());
    }
}
