<?php

namespace Sunaoka\Aws\Structures\Ecr\StartLifecyclePolicyPreview;

trait StartLifecyclePolicyPreviewTrait
{
    /**
     * @param StartLifecyclePolicyPreviewRequest $args
     * @return StartLifecyclePolicyPreviewResponse
     */
    public function startLifecyclePolicyPreview(StartLifecyclePolicyPreviewRequest $args)
    {
        $result = parent::startLifecyclePolicyPreview($args->toArray());
        return new StartLifecyclePolicyPreviewResponse($result->toArray());
    }
}
