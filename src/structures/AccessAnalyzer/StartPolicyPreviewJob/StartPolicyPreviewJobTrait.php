<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyPreviewJob;

trait StartPolicyPreviewJobTrait
{
    /**
     * @param StartPolicyPreviewJobRequest $args
     * @return StartPolicyPreviewJobResponse
     */
    public function startPolicyPreviewJob(StartPolicyPreviewJobRequest $args)
    {
        $result = parent::startPolicyPreviewJob($args->toArray());
        return new StartPolicyPreviewJobResponse($result->toArray());
    }
}
