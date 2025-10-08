<?php

namespace Sunaoka\Aws\Structures\Emr\GetOnClusterAppUIPresignedURL;

trait GetOnClusterAppUIPresignedURLTrait
{
    /**
     * @param GetOnClusterAppUIPresignedURLRequest $args
     * @return GetOnClusterAppUIPresignedURLResponse
     */
    public function getOnClusterAppUIPresignedURL(GetOnClusterAppUIPresignedURLRequest $args)
    {
        $result = parent::getOnClusterAppUIPresignedURL($args->toArray());
        return new GetOnClusterAppUIPresignedURLResponse($result->toArray());
    }
}
