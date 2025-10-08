<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetPortalServiceProviderMetadata;

trait GetPortalServiceProviderMetadataTrait
{
    /**
     * @param GetPortalServiceProviderMetadataRequest $args
     * @return GetPortalServiceProviderMetadataResponse
     */
    public function getPortalServiceProviderMetadata(GetPortalServiceProviderMetadataRequest $args)
    {
        $result = parent::getPortalServiceProviderMetadata($args->toArray());
        return new GetPortalServiceProviderMetadataResponse($result->toArray());
    }
}
