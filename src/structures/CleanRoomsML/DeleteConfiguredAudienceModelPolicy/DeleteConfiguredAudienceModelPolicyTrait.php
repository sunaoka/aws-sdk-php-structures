<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredAudienceModelPolicy;

trait DeleteConfiguredAudienceModelPolicyTrait
{
    /**
     * @param DeleteConfiguredAudienceModelPolicyRequest $args
     * @return void
     */
    public function deleteConfiguredAudienceModelPolicy(DeleteConfiguredAudienceModelPolicyRequest $args)
    {
        parent::deleteConfiguredAudienceModelPolicy($args->toArray());
    }
}
