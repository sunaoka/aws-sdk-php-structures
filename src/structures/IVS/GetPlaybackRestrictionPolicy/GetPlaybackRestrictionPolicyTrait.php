<?php

namespace Sunaoka\Aws\Structures\IVS\GetPlaybackRestrictionPolicy;

trait GetPlaybackRestrictionPolicyTrait
{
    /**
     * @param GetPlaybackRestrictionPolicyRequest $args
     * @return GetPlaybackRestrictionPolicyResponse
     */
    public function getPlaybackRestrictionPolicy(GetPlaybackRestrictionPolicyRequest $args)
    {
        $result = parent::getPlaybackRestrictionPolicy($args->toArray());
        return new GetPlaybackRestrictionPolicyResponse($result->toArray());
    }
}
