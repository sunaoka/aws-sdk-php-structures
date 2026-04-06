<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetExtensionVersion;

trait GetExtensionVersionTrait
{
    /**
     * @param GetExtensionVersionRequest $args
     * @return GetExtensionVersionResponse
     */
    public function getExtensionVersion(GetExtensionVersionRequest $args)
    {
        $result = parent::getExtensionVersion($args->toArray());
        return new GetExtensionVersionResponse($result->toArray());
    }
}
