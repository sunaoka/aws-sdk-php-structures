<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateImageVersion;

trait UpdateImageVersionTrait
{
    /**
     * @param UpdateImageVersionRequest $args
     * @return UpdateImageVersionResponse
     */
    public function updateImageVersion(UpdateImageVersionRequest $args)
    {
        $result = parent::updateImageVersion($args->toArray());
        return new UpdateImageVersionResponse($result->toArray());
    }
}
