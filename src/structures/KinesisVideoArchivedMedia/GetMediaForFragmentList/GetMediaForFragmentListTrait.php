<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetMediaForFragmentList;

trait GetMediaForFragmentListTrait
{
    /**
     * @param GetMediaForFragmentListRequest $args
     * @return GetMediaForFragmentListResponse
     */
    public function getMediaForFragmentList(GetMediaForFragmentListRequest $args)
    {
        $result = parent::getMediaForFragmentList($args->toArray());
        return new GetMediaForFragmentListResponse($result->toArray());
    }
}
