<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview;

trait GetLifecyclePolicyPreviewTrait
{
    /**
     * @param GetLifecyclePolicyPreviewRequest $args
     * @return GetLifecyclePolicyPreviewResponse
     */
    public function getLifecyclePolicyPreview(GetLifecyclePolicyPreviewRequest $args)
    {
        $result = parent::getLifecyclePolicyPreview($args->toArray());
        return new GetLifecyclePolicyPreviewResponse($result->toArray());
    }
}
