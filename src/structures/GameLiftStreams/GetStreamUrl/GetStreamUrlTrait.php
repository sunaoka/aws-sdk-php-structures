<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamUrl;

trait GetStreamUrlTrait
{
    /**
     * @param GetStreamUrlRequest $args
     * @return GetStreamUrlResponse
     */
    public function getStreamUrl(GetStreamUrlRequest $args)
    {
        $result = parent::getStreamUrl($args->toArray());
        return new GetStreamUrlResponse($result->toArray());
    }
}
