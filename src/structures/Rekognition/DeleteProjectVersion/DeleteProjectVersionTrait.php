<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteProjectVersion;

trait DeleteProjectVersionTrait
{
    /**
     * @param DeleteProjectVersionRequest $args
     * @return DeleteProjectVersionResponse
     */
    public function deleteProjectVersion(DeleteProjectVersionRequest $args)
    {
        $result = parent::deleteProjectVersion($args->toArray());
        return new DeleteProjectVersionResponse($result->toArray());
    }
}
