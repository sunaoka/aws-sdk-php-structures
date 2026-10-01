<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateIndexMode;

trait UpdateIndexModeTrait
{
    /**
     * @param UpdateIndexModeRequest $args
     * @return UpdateIndexModeResponse
     */
    public function updateIndexMode(UpdateIndexModeRequest $args)
    {
        $result = parent::updateIndexMode($args->toArray());
        return new UpdateIndexModeResponse($result->toArray());
    }
}
