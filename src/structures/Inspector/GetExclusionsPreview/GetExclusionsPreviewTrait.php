<?php

namespace Sunaoka\Aws\Structures\Inspector\GetExclusionsPreview;

trait GetExclusionsPreviewTrait
{
    /**
     * @param GetExclusionsPreviewRequest $args
     * @return GetExclusionsPreviewResponse
     */
    public function getExclusionsPreview(GetExclusionsPreviewRequest $args)
    {
        $result = parent::getExclusionsPreview($args->toArray());
        return new GetExclusionsPreviewResponse($result->toArray());
    }
}
