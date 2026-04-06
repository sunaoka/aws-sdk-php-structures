<?php

namespace Sunaoka\Aws\Structures\IVS\UpdatePlaybackRestrictionPolicy;

trait UpdatePlaybackRestrictionPolicyTrait
{
    /**
     * @param UpdatePlaybackRestrictionPolicyRequest $args
     * @return UpdatePlaybackRestrictionPolicyResponse
     */
    public function updatePlaybackRestrictionPolicy(UpdatePlaybackRestrictionPolicyRequest $args)
    {
        $result = parent::updatePlaybackRestrictionPolicy($args->toArray());
        return new UpdatePlaybackRestrictionPolicyResponse($result->toArray());
    }
}
