<?php

namespace Sunaoka\Aws\Structures\CloudFront\DisassociateDistributionWebACL;

trait DisassociateDistributionWebACLTrait
{
    /**
     * @param DisassociateDistributionWebACLRequest $args
     * @return DisassociateDistributionWebACLResponse
     */
    public function disassociateDistributionWebACL(DisassociateDistributionWebACLRequest $args)
    {
        $result = parent::disassociateDistributionWebACL($args->toArray());
        return new DisassociateDistributionWebACLResponse($result->toArray());
    }
}
