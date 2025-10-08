<?php

namespace Sunaoka\Aws\Structures\Rekognition\StopProjectVersion;

trait StopProjectVersionTrait
{
    /**
     * @param StopProjectVersionRequest $args
     * @return StopProjectVersionResponse
     */
    public function stopProjectVersion(StopProjectVersionRequest $args)
    {
        $result = parent::stopProjectVersion($args->toArray());
        return new StopProjectVersionResponse($result->toArray());
    }
}
