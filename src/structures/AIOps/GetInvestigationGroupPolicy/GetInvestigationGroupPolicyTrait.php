<?php

namespace Sunaoka\Aws\Structures\AIOps\GetInvestigationGroupPolicy;

trait GetInvestigationGroupPolicyTrait
{
    /**
     * @param GetInvestigationGroupPolicyRequest $args
     * @return GetInvestigationGroupPolicyResponse
     */
    public function getInvestigationGroupPolicy(GetInvestigationGroupPolicyRequest $args)
    {
        $result = parent::getInvestigationGroupPolicy($args->toArray());
        return new GetInvestigationGroupPolicyResponse($result->toArray());
    }
}
