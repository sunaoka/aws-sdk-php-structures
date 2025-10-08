<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstancesByPolicy;

trait ListTrafficPolicyInstancesByPolicyTrait
{
    /**
     * @param ListTrafficPolicyInstancesByPolicyRequest $args
     * @return ListTrafficPolicyInstancesByPolicyResponse
     */
    public function listTrafficPolicyInstancesByPolicy(ListTrafficPolicyInstancesByPolicyRequest $args)
    {
        $result = parent::listTrafficPolicyInstancesByPolicy($args->toArray());
        return new ListTrafficPolicyInstancesByPolicyResponse($result->toArray());
    }
}
