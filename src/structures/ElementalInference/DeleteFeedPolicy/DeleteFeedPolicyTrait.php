<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteFeedPolicy;

trait DeleteFeedPolicyTrait
{
    /**
     * @param DeleteFeedPolicyRequest $args
     * @return void
     */
    public function deleteFeedPolicy(DeleteFeedPolicyRequest $args)
    {
        parent::deleteFeedPolicy($args->toArray());
    }
}
