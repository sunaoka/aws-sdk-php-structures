<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviews;

trait ListAccessPreviewsTrait
{
    /**
     * @param ListAccessPreviewsRequest $args
     * @return ListAccessPreviewsResponse
     */
    public function listAccessPreviews(ListAccessPreviewsRequest $args)
    {
        $result = parent::listAccessPreviews($args->toArray());
        return new ListAccessPreviewsResponse($result->toArray());
    }
}
