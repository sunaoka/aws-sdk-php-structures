<?php

namespace Sunaoka\Aws\Structures\WAFV2\AssociateWebACL;

trait AssociateWebACLTrait
{
    /**
     * @param AssociateWebACLRequest $args
     * @return AssociateWebACLResponse
     */
    public function associateWebACL(AssociateWebACLRequest $args)
    {
        $result = parent::associateWebACL($args->toArray());
        return new AssociateWebACLResponse($result->toArray());
    }
}
