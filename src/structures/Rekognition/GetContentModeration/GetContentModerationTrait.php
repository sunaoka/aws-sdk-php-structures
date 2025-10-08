<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration;

trait GetContentModerationTrait
{
    /**
     * @param GetContentModerationRequest $args
     * @return GetContentModerationResponse
     */
    public function getContentModeration(GetContentModerationRequest $args)
    {
        $result = parent::getContentModeration($args->toArray());
        return new GetContentModerationResponse($result->toArray());
    }
}
