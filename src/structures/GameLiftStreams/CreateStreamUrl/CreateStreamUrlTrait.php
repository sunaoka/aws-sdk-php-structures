<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamUrl;

trait CreateStreamUrlTrait
{
    /**
     * @param CreateStreamUrlRequest $args
     * @return CreateStreamUrlResponse
     */
    public function createStreamUrl(CreateStreamUrlRequest $args)
    {
        $result = parent::createStreamUrl($args->toArray());
        return new CreateStreamUrlResponse($result->toArray());
    }
}
