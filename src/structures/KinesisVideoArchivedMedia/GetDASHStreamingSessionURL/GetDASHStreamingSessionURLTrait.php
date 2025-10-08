<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetDASHStreamingSessionURL;

trait GetDASHStreamingSessionURLTrait
{
    /**
     * @param GetDASHStreamingSessionURLRequest $args
     * @return GetDASHStreamingSessionURLResponse
     */
    public function getDASHStreamingSessionURL(GetDASHStreamingSessionURLRequest $args)
    {
        $result = parent::getDASHStreamingSessionURL($args->toArray());
        return new GetDASHStreamingSessionURLResponse($result->toArray());
    }
}
