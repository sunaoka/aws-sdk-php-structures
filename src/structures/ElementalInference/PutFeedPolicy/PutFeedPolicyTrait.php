<?php

namespace Sunaoka\Aws\Structures\ElementalInference\PutFeedPolicy;

trait PutFeedPolicyTrait
{
    /**
     * @param PutFeedPolicyRequest $args
     * @return PutFeedPolicyResponse
     */
    public function putFeedPolicy(PutFeedPolicyRequest $args)
    {
        $result = parent::putFeedPolicy($args->toArray());
        return new PutFeedPolicyResponse($result->toArray());
    }
}
