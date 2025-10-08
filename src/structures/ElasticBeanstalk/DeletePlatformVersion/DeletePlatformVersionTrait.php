<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeletePlatformVersion;

trait DeletePlatformVersionTrait
{
    /**
     * @param DeletePlatformVersionRequest $args
     * @return DeletePlatformVersionResponse
     */
    public function deletePlatformVersion(DeletePlatformVersionRequest $args)
    {
        $result = parent::deletePlatformVersion($args->toArray());
        return new DeletePlatformVersionResponse($result->toArray());
    }
}
