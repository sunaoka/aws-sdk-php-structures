<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutChannelPolicy;

trait PutChannelPolicyTrait
{
    /**
     * @param PutChannelPolicyRequest $args
     * @return PutChannelPolicyResponse
     */
    public function putChannelPolicy(PutChannelPolicyRequest $args)
    {
        $result = parent::putChannelPolicy($args->toArray());
        return new PutChannelPolicyResponse($result->toArray());
    }
}
