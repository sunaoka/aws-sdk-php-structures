<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartContentModeration;

trait StartContentModerationTrait
{
    /**
     * @param StartContentModerationRequest $args
     * @return StartContentModerationResponse
     */
    public function startContentModeration(StartContentModerationRequest $args)
    {
        $result = parent::startContentModeration($args->toArray());
        return new StartContentModerationResponse($result->toArray());
    }
}
