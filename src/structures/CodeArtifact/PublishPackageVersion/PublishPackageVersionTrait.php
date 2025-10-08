<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PublishPackageVersion;

trait PublishPackageVersionTrait
{
    /**
     * @param PublishPackageVersionRequest $args
     * @return PublishPackageVersionResponse
     */
    public function publishPackageVersion(PublishPackageVersionRequest $args)
    {
        $result = parent::publishPackageVersion($args->toArray());
        return new PublishPackageVersionResponse($result->toArray());
    }
}
