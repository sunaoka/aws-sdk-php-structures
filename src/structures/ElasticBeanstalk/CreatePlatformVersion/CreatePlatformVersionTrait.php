<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreatePlatformVersion;

trait CreatePlatformVersionTrait
{
    /**
     * @param CreatePlatformVersionRequest $args
     * @return CreatePlatformVersionResponse
     */
    public function createPlatformVersion(CreatePlatformVersionRequest $args)
    {
        $result = parent::createPlatformVersion($args->toArray());
        return new CreatePlatformVersionResponse($result->toArray());
    }
}
