<?php

namespace Sunaoka\Aws\Structures\IVS\CreatePlaybackRestrictionPolicy;

trait CreatePlaybackRestrictionPolicyTrait
{
    /**
     * @param CreatePlaybackRestrictionPolicyRequest $args
     * @return CreatePlaybackRestrictionPolicyResponse
     */
    public function createPlaybackRestrictionPolicy(CreatePlaybackRestrictionPolicyRequest $args)
    {
        $result = parent::createPlaybackRestrictionPolicy($args->toArray());
        return new CreatePlaybackRestrictionPolicyResponse($result->toArray());
    }
}
