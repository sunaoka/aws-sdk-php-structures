<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DisassociateSubnets;

trait DisassociateSubnetsTrait
{
    /**
     * @param DisassociateSubnetsRequest $args
     * @return DisassociateSubnetsResponse
     */
    public function disassociateSubnets(DisassociateSubnetsRequest $args)
    {
        $result = parent::disassociateSubnets($args->toArray());
        return new DisassociateSubnetsResponse($result->toArray());
    }
}
