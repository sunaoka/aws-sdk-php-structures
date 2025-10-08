<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteImageVersion;

trait DeleteImageVersionTrait
{
    /**
     * @param DeleteImageVersionRequest $args
     * @return DeleteImageVersionResponse
     */
    public function deleteImageVersion(DeleteImageVersionRequest $args)
    {
        $result = parent::deleteImageVersion($args->toArray());
        return new DeleteImageVersionResponse($result->toArray());
    }
}
