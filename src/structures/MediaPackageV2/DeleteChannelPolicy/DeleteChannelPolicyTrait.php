<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\DeleteChannelPolicy;

trait DeleteChannelPolicyTrait
{
    /**
     * @param DeleteChannelPolicyRequest $args
     * @return DeleteChannelPolicyResponse
     */
    public function deleteChannelPolicy(DeleteChannelPolicyRequest $args)
    {
        $result = parent::deleteChannelPolicy($args->toArray());
        return new DeleteChannelPolicyResponse($result->toArray());
    }
}
