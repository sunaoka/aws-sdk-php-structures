<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallDescription;

trait UpdateFirewallDescriptionTrait
{
    /**
     * @param UpdateFirewallDescriptionRequest $args
     * @return UpdateFirewallDescriptionResponse
     */
    public function updateFirewallDescription(UpdateFirewallDescriptionRequest $args)
    {
        $result = parent::updateFirewallDescription($args->toArray());
        return new UpdateFirewallDescriptionResponse($result->toArray());
    }
}
