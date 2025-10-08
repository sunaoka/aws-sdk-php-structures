<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion;

trait PublishVersionTrait
{
    /**
     * @param PublishVersionRequest $args
     * @return PublishVersionResponse
     */
    public function publishVersion(PublishVersionRequest $args)
    {
        $result = parent::publishVersion($args->toArray());
        return new PublishVersionResponse($result->toArray());
    }
}
