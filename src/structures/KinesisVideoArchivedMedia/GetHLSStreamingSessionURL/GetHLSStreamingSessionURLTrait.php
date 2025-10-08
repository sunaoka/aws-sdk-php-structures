<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetHLSStreamingSessionURL;

trait GetHLSStreamingSessionURLTrait
{
    /**
     * @param GetHLSStreamingSessionURLRequest $args
     * @return GetHLSStreamingSessionURLResponse
     */
    public function getHLSStreamingSessionURL(GetHLSStreamingSessionURLRequest $args)
    {
        $result = parent::getHLSStreamingSessionURL($args->toArray());
        return new GetHLSStreamingSessionURLResponse($result->toArray());
    }
}
