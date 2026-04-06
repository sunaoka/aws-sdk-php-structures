<?php

namespace Sunaoka\Aws\Structures\AIOps\PutInvestigationGroupPolicy;

trait PutInvestigationGroupPolicyTrait
{
    /**
     * @param PutInvestigationGroupPolicyRequest $args
     * @return PutInvestigationGroupPolicyResponse
     */
    public function putInvestigationGroupPolicy(PutInvestigationGroupPolicyRequest $args)
    {
        $result = parent::putInvestigationGroupPolicy($args->toArray());
        return new PutInvestigationGroupPolicyResponse($result->toArray());
    }
}
