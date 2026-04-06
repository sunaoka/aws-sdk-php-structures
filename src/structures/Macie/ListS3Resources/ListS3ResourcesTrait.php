<?php

namespace Sunaoka\Aws\Structures\Macie\ListS3Resources;

trait ListS3ResourcesTrait
{
    /**
     * @param ListS3ResourcesRequest $args
     * @return ListS3ResourcesResponse
     */
    public function listS3Resources(ListS3ResourcesRequest $args)
    {
        $result = parent::listS3Resources($args->toArray());
        return new ListS3ResourcesResponse($result->toArray());
    }
}
