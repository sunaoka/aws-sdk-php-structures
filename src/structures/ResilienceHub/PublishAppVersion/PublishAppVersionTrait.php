<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\PublishAppVersion;

trait PublishAppVersionTrait
{
    /**
     * @param PublishAppVersionRequest $args
     * @return PublishAppVersionResponse
     */
    public function publishAppVersion(PublishAppVersionRequest $args)
    {
        $result = parent::publishAppVersion($args->toArray());
        return new PublishAppVersionResponse($result->toArray());
    }
}
