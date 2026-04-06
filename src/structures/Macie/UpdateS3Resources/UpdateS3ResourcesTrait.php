<?php

namespace Sunaoka\Aws\Structures\Macie\UpdateS3Resources;

trait UpdateS3ResourcesTrait
{
    /**
     * @param UpdateS3ResourcesRequest $args
     * @return UpdateS3ResourcesResponse
     */
    public function updateS3Resources(UpdateS3ResourcesRequest $args)
    {
        $result = parent::updateS3Resources($args->toArray());
        return new UpdateS3ResourcesResponse($result->toArray());
    }
}
