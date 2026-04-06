<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CancelPolicyPreviewJob;

trait CancelPolicyPreviewJobTrait
{
    /**
     * @param CancelPolicyPreviewJobRequest $args
     * @return CancelPolicyPreviewJobResponse
     */
    public function cancelPolicyPreviewJob(CancelPolicyPreviewJobRequest $args)
    {
        $result = parent::cancelPolicyPreviewJob($args->toArray());
        return new CancelPolicyPreviewJobResponse($result->toArray());
    }
}
