<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointPolicyStatus;

trait GetAccessPointPolicyStatusTrait
{
    /**
     * @param GetAccessPointPolicyStatusRequest $args
     * @return GetAccessPointPolicyStatusResponse
     */
    public function getAccessPointPolicyStatus(GetAccessPointPolicyStatusRequest $args)
    {
        $result = parent::getAccessPointPolicyStatus($args->toArray());
        return new GetAccessPointPolicyStatusResponse($result->toArray());
    }
}
