<?php

namespace Sunaoka\Aws\Structures\IVS\DeletePlaybackRestrictionPolicy;

trait DeletePlaybackRestrictionPolicyTrait
{
    /**
     * @param DeletePlaybackRestrictionPolicyRequest $args
     * @return void
     */
    public function deletePlaybackRestrictionPolicy(DeletePlaybackRestrictionPolicyRequest $args)
    {
        parent::deletePlaybackRestrictionPolicy($args->toArray());
    }
}
