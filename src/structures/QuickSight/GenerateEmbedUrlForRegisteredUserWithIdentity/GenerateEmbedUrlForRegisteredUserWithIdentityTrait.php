<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity;

trait GenerateEmbedUrlForRegisteredUserWithIdentityTrait
{
    /**
     * @param GenerateEmbedUrlForRegisteredUserWithIdentityRequest $args
     * @return GenerateEmbedUrlForRegisteredUserWithIdentityResponse
     */
    public function generateEmbedUrlForRegisteredUserWithIdentity(GenerateEmbedUrlForRegisteredUserWithIdentityRequest $args)
    {
        $result = parent::generateEmbedUrlForRegisteredUserWithIdentity($args->toArray());
        return new GenerateEmbedUrlForRegisteredUserWithIdentityResponse($result->toArray());
    }
}
