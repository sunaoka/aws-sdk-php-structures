<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetAutoMergingPreview;

trait GetAutoMergingPreviewTrait
{
    /**
     * @param GetAutoMergingPreviewRequest $args
     * @return GetAutoMergingPreviewResponse
     */
    public function getAutoMergingPreview(GetAutoMergingPreviewRequest $args)
    {
        $result = parent::getAutoMergingPreview($args->toArray());
        return new GetAutoMergingPreviewResponse($result->toArray());
    }
}
