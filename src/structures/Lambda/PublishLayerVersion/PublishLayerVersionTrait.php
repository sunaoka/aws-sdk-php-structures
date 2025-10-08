<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishLayerVersion;

trait PublishLayerVersionTrait
{
    /**
     * @param PublishLayerVersionRequest $args
     * @return PublishLayerVersionResponse
     */
    public function publishLayerVersion(PublishLayerVersionRequest $args)
    {
        $result = parent::publishLayerVersion($args->toArray());
        return new PublishLayerVersionResponse($result->toArray());
    }
}
