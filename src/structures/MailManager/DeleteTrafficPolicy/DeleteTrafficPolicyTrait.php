<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteTrafficPolicy;

trait DeleteTrafficPolicyTrait
{
    /**
     * @param DeleteTrafficPolicyRequest $args
     * @return DeleteTrafficPolicyResponse
     */
    public function deleteTrafficPolicy(DeleteTrafficPolicyRequest $args)
    {
        $result = parent::deleteTrafficPolicy($args->toArray());
        return new DeleteTrafficPolicyResponse($result->toArray());
    }
}
