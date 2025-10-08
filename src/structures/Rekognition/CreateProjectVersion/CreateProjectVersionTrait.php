<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion;

trait CreateProjectVersionTrait
{
    /**
     * @param CreateProjectVersionRequest $args
     * @return CreateProjectVersionResponse
     */
    public function createProjectVersion(CreateProjectVersionRequest $args)
    {
        $result = parent::createProjectVersion($args->toArray());
        return new CreateProjectVersionResponse($result->toArray());
    }
}
