<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetPersonalAccessTokenMetadata;

trait GetPersonalAccessTokenMetadataTrait
{
    /**
     * @param GetPersonalAccessTokenMetadataRequest $args
     * @return GetPersonalAccessTokenMetadataResponse
     */
    public function getPersonalAccessTokenMetadata(GetPersonalAccessTokenMetadataRequest $args)
    {
        $result = parent::getPersonalAccessTokenMetadata($args->toArray());
        return new GetPersonalAccessTokenMetadataResponse($result->toArray());
    }
}
