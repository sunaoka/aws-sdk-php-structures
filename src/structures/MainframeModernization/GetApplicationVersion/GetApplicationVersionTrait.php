<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplicationVersion;

trait GetApplicationVersionTrait
{
    /**
     * @param GetApplicationVersionRequest $args
     * @return GetApplicationVersionResponse
     */
    public function getApplicationVersion(GetApplicationVersionRequest $args)
    {
        $result = parent::getApplicationVersion($args->toArray());
        return new GetApplicationVersionResponse($result->toArray());
    }
}
