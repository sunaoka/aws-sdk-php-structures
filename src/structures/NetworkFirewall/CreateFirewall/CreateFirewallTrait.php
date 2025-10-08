<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall;

trait CreateFirewallTrait
{
    /**
     * @param CreateFirewallRequest $args
     * @return CreateFirewallResponse
     */
    public function createFirewall(CreateFirewallRequest $args)
    {
        $result = parent::createFirewall($args->toArray());
        return new CreateFirewallResponse($result->toArray());
    }
}
