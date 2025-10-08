<?php

namespace Sunaoka\Aws\Structures\Organizations\ListPoliciesForTarget;

trait ListPoliciesForTargetTrait
{
    /**
     * @param ListPoliciesForTargetRequest $args
     * @return ListPoliciesForTargetResponse
     */
    public function listPoliciesForTarget(ListPoliciesForTargetRequest $args)
    {
        $result = parent::listPoliciesForTarget($args->toArray());
        return new ListPoliciesForTargetResponse($result->toArray());
    }
}
