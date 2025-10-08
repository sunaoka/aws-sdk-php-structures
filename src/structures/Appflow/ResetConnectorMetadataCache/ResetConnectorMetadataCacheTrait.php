<?php

namespace Sunaoka\Aws\Structures\Appflow\ResetConnectorMetadataCache;

trait ResetConnectorMetadataCacheTrait
{
    /**
     * @param ResetConnectorMetadataCacheRequest $args
     * @return ResetConnectorMetadataCacheResponse
     */
    public function resetConnectorMetadataCache(ResetConnectorMetadataCacheRequest $args)
    {
        $result = parent::resetConnectorMetadataCache($args->toArray());
        return new ResetConnectorMetadataCacheResponse($result->toArray());
    }
}
