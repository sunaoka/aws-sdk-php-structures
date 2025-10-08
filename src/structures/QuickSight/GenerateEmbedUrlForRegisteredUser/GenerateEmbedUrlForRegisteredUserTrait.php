<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser;

trait GenerateEmbedUrlForRegisteredUserTrait
{
    /**
     * @param GenerateEmbedUrlForRegisteredUserRequest $args
     * @return GenerateEmbedUrlForRegisteredUserResponse
     */
    public function generateEmbedUrlForRegisteredUser(GenerateEmbedUrlForRegisteredUserRequest $args)
    {
        $result = parent::generateEmbedUrlForRegisteredUser($args->toArray());
        return new GenerateEmbedUrlForRegisteredUserResponse($result->toArray());
    }
}
