<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy;

trait CreateTrafficPolicyTrait
{
    /**
     * @param CreateTrafficPolicyRequest $args
     * @return CreateTrafficPolicyResponse
     */
    public function createTrafficPolicy(CreateTrafficPolicyRequest $args)
    {
        $result = parent::createTrafficPolicy($args->toArray());
        return new CreateTrafficPolicyResponse($result->toArray());
    }
}
