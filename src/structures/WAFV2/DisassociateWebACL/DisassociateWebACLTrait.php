<?php

namespace Sunaoka\Aws\Structures\WAFV2\DisassociateWebACL;

trait DisassociateWebACLTrait
{
    /**
     * @param DisassociateWebACLRequest $args
     * @return DisassociateWebACLResponse
     */
    public function disassociateWebACL(DisassociateWebACLRequest $args)
    {
        $result = parent::disassociateWebACL($args->toArray());
        return new DisassociateWebACLResponse($result->toArray());
    }
}
