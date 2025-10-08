<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobBookmark;

trait GetJobBookmarkTrait
{
    /**
     * @param GetJobBookmarkRequest $args
     * @return GetJobBookmarkResponse
     */
    public function getJobBookmark(GetJobBookmarkRequest $args)
    {
        $result = parent::getJobBookmark($args->toArray());
        return new GetJobBookmarkResponse($result->toArray());
    }
}
