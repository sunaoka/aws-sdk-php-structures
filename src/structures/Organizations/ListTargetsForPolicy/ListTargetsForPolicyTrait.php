<?php

namespace Sunaoka\Aws\Structures\Organizations\ListTargetsForPolicy;

trait ListTargetsForPolicyTrait
{
    /**
     * @param ListTargetsForPolicyRequest $args
     * @return ListTargetsForPolicyResponse
     */
    public function listTargetsForPolicy(ListTargetsForPolicyRequest $args)
    {
        $result = parent::listTargetsForPolicy($args->toArray());
        return new ListTargetsForPolicyResponse($result->toArray());
    }
}
