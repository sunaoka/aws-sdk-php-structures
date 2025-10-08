<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\PutChannelPolicy;

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
