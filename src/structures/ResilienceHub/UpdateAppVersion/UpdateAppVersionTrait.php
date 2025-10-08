<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersion;

trait UpdateAppVersionTrait
{
    /**
     * @param UpdateAppVersionRequest $args
     * @return UpdateAppVersionResponse
     */
    public function updateAppVersion(UpdateAppVersionRequest $args)
    {
        $result = parent::updateAppVersion($args->toArray());
        return new UpdateAppVersionResponse($result->toArray());
    }
}
