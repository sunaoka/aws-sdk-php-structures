<?php

namespace Sunaoka\Aws\Structures\IVS\ListPlaybackRestrictionPolicies;

trait ListPlaybackRestrictionPoliciesTrait
{
    /**
     * @param ListPlaybackRestrictionPoliciesRequest $args
     * @return ListPlaybackRestrictionPoliciesResponse
     */
    public function listPlaybackRestrictionPolicies(ListPlaybackRestrictionPoliciesRequest $args)
    {
        $result = parent::listPlaybackRestrictionPolicies($args->toArray());
        return new ListPlaybackRestrictionPoliciesResponse($result->toArray());
    }
}
