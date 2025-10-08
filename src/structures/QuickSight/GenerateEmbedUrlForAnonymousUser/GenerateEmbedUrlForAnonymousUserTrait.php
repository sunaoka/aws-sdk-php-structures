<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser;

trait GenerateEmbedUrlForAnonymousUserTrait
{
    /**
     * @param GenerateEmbedUrlForAnonymousUserRequest $args
     * @return GenerateEmbedUrlForAnonymousUserResponse
     */
    public function generateEmbedUrlForAnonymousUser(GenerateEmbedUrlForAnonymousUserRequest $args)
    {
        $result = parent::generateEmbedUrlForAnonymousUser($args->toArray());
        return new GenerateEmbedUrlForAnonymousUserResponse($result->toArray());
    }
}
