<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewalls;

trait ListFirewallsTrait
{
    /**
     * @param ListFirewallsRequest $args
     * @return ListFirewallsResponse
     */
    public function listFirewalls(ListFirewallsRequest $args)
    {
        $result = parent::listFirewalls($args->toArray());
        return new ListFirewallsResponse($result->toArray());
    }
}
