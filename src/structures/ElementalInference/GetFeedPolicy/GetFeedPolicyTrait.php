<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeedPolicy;

trait GetFeedPolicyTrait
{
    /**
     * @param GetFeedPolicyRequest $args
     * @return GetFeedPolicyResponse
     */
    public function getFeedPolicy(GetFeedPolicyRequest $args)
    {
        $result = parent::getFeedPolicy($args->toArray());
        return new GetFeedPolicyResponse($result->toArray());
    }
}
