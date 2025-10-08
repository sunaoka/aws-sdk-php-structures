<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetClip;

trait GetClipTrait
{
    /**
     * @param GetClipRequest $args
     * @return GetClipResponse
     */
    public function getClip(GetClipRequest $args)
    {
        $result = parent::getClip($args->toArray());
        return new GetClipResponse($result->toArray());
    }
}
