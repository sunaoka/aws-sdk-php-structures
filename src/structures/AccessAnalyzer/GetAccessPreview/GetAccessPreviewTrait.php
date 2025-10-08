<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview;

trait GetAccessPreviewTrait
{
    /**
     * @param GetAccessPreviewRequest $args
     * @return GetAccessPreviewResponse
     */
    public function getAccessPreview(GetAccessPreviewRequest $args)
    {
        $result = parent::getAccessPreview($args->toArray());
        return new GetAccessPreviewResponse($result->toArray());
    }
}
