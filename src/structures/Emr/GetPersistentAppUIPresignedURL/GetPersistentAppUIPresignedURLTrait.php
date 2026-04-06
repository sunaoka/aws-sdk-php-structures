<?php

namespace Sunaoka\Aws\Structures\Emr\GetPersistentAppUIPresignedURL;

trait GetPersistentAppUIPresignedURLTrait
{
    /**
     * @param GetPersistentAppUIPresignedURLRequest $args
     * @return GetPersistentAppUIPresignedURLResponse
     */
    public function getPersistentAppUIPresignedURL(GetPersistentAppUIPresignedURLRequest $args)
    {
        $result = parent::getPersistentAppUIPresignedURL($args->toArray());
        return new GetPersistentAppUIPresignedURLResponse($result->toArray());
    }
}
