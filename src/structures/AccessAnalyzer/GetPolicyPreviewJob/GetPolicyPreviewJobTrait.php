<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewJob;

trait GetPolicyPreviewJobTrait
{
    /**
     * @param GetPolicyPreviewJobRequest $args
     * @return GetPolicyPreviewJobResponse
     */
    public function getPolicyPreviewJob(GetPolicyPreviewJobRequest $args)
    {
        $result = parent::getPolicyPreviewJob($args->toArray());
        return new GetPolicyPreviewJobResponse($result->toArray());
    }
}
