<?php

namespace Sunaoka\Aws\Structures\CloudFront\AssociateDistributionWebACL;

trait AssociateDistributionWebACLTrait
{
    /**
     * @param AssociateDistributionWebACLRequest $args
     * @return AssociateDistributionWebACLResponse
     */
    public function associateDistributionWebACL(AssociateDistributionWebACLRequest $args)
    {
        $result = parent::associateDistributionWebACL($args->toArray());
        return new AssociateDistributionWebACLResponse($result->toArray());
    }
}
