<?php

namespace Sunaoka\Aws\Structures\AIOps\DeleteInvestigationGroupPolicy;

trait DeleteInvestigationGroupPolicyTrait
{
    /**
     * @param DeleteInvestigationGroupPolicyRequest $args
     * @return DeleteInvestigationGroupPolicyResponse
     */
    public function deleteInvestigationGroupPolicy(DeleteInvestigationGroupPolicyRequest $args)
    {
        $result = parent::deleteInvestigationGroupPolicy($args->toArray());
        return new DeleteInvestigationGroupPolicyResponse($result->toArray());
    }
}
