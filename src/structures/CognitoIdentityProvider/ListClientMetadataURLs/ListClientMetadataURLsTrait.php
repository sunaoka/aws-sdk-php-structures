<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListClientMetadataURLs;

trait ListClientMetadataURLsTrait
{
    /**
     * @param ListClientMetadataURLsRequest $args
     * @return ListClientMetadataURLsResponse
     */
    public function listClientMetadataURLs(ListClientMetadataURLsRequest $args)
    {
        $result = parent::listClientMetadataURLs($args->toArray());
        return new ListClientMetadataURLsResponse($result->toArray());
    }
}
