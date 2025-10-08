<?php

namespace Sunaoka\Aws\Structures\Amplify\GetArtifactUrl;

trait GetArtifactUrlTrait
{
    /**
     * @param GetArtifactUrlRequest $args
     * @return GetArtifactUrlResponse
     */
    public function getArtifactUrl(GetArtifactUrlRequest $args)
    {
        $result = parent::getArtifactUrl($args->toArray());
        return new GetArtifactUrlResponse($result->toArray());
    }
}
