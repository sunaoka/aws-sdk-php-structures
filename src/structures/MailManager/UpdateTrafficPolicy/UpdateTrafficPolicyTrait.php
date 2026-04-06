<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy;

trait UpdateTrafficPolicyTrait
{
    /**
     * @param UpdateTrafficPolicyRequest $args
     * @return UpdateTrafficPolicyResponse
     */
    public function updateTrafficPolicy(UpdateTrafficPolicyRequest $args)
    {
        $result = parent::updateTrafficPolicy($args->toArray());
        return new UpdateTrafficPolicyResponse($result->toArray());
    }
}
