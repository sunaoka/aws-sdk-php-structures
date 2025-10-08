<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetLineageGroupPolicy;

trait GetLineageGroupPolicyTrait
{
    /**
     * @param GetLineageGroupPolicyRequest $args
     * @return GetLineageGroupPolicyResponse
     */
    public function getLineageGroupPolicy(GetLineageGroupPolicyRequest $args)
    {
        $result = parent::getLineageGroupPolicy($args->toArray());
        return new GetLineageGroupPolicyResponse($result->toArray());
    }
}
