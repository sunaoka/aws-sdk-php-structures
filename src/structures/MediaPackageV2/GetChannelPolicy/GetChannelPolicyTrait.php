<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannelPolicy;

trait GetChannelPolicyTrait
{
    /**
     * @param GetChannelPolicyRequest $args
     * @return GetChannelPolicyResponse
     */
    public function getChannelPolicy(GetChannelPolicyRequest $args)
    {
        $result = parent::getChannelPolicy($args->toArray());
        return new GetChannelPolicyResponse($result->toArray());
    }
}
