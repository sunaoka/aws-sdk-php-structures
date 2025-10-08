<?php

namespace Sunaoka\Aws\Structures\KinesisVideoMedia\GetMedia;

trait GetMediaTrait
{
    /**
     * @param GetMediaRequest $args
     * @return GetMediaResponse
     */
    public function getMedia(GetMediaRequest $args)
    {
        $result = parent::getMedia($args->toArray());
        return new GetMediaResponse($result->toArray());
    }
}
