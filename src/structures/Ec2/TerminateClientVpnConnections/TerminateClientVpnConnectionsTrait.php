<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections;

trait TerminateClientVpnConnectionsTrait
{
    /**
     * @param TerminateClientVpnConnectionsRequest $args
     * @return TerminateClientVpnConnectionsResponse
     */
    public function terminateClientVpnConnections(TerminateClientVpnConnectionsRequest $args)
    {
        $result = parent::terminateClientVpnConnections($args->toArray());
        return new TerminateClientVpnConnectionsResponse($result->toArray());
    }
}
