<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateNetworkResourceMetadata;

trait UpdateNetworkResourceMetadataTrait
{
    /**
     * @param UpdateNetworkResourceMetadataRequest $args
     * @return UpdateNetworkResourceMetadataResponse
     */
    public function updateNetworkResourceMetadata(UpdateNetworkResourceMetadataRequest $args)
    {
        $result = parent::updateNetworkResourceMetadata($args->toArray());
        return new UpdateNetworkResourceMetadataResponse($result->toArray());
    }
}
