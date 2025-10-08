<?php

namespace Sunaoka\Aws\Structures\Glue\ResetJobBookmark;

trait ResetJobBookmarkTrait
{
    /**
     * @param ResetJobBookmarkRequest $args
     * @return ResetJobBookmarkResponse
     */
    public function resetJobBookmark(ResetJobBookmarkRequest $args)
    {
        $result = parent::resetJobBookmark($args->toArray());
        return new ResetJobBookmarkResponse($result->toArray());
    }
}
