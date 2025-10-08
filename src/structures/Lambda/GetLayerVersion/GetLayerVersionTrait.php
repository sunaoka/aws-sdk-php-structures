<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersion;

trait GetLayerVersionTrait
{
    /**
     * @param GetLayerVersionRequest $args
     * @return GetLayerVersionResponse
     */
    public function getLayerVersion(GetLayerVersionRequest $args)
    {
        $result = parent::getLayerVersion($args->toArray());
        return new GetLayerVersionResponse($result->toArray());
    }
}
