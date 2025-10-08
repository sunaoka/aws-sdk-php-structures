<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartProjectVersion;

trait StartProjectVersionTrait
{
    /**
     * @param StartProjectVersionRequest $args
     * @return StartProjectVersionResponse
     */
    public function startProjectVersion(StartProjectVersionRequest $args)
    {
        $result = parent::startProjectVersion($args->toArray());
        return new StartProjectVersionResponse($result->toArray());
    }
}
