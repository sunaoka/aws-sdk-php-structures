<?php

namespace Sunaoka\Aws\Structures\Route53\ListVPCAssociationAuthorizations;

trait ListVPCAssociationAuthorizationsTrait
{
    /**
     * @param ListVPCAssociationAuthorizationsRequest $args
     * @return ListVPCAssociationAuthorizationsResponse
     */
    public function listVPCAssociationAuthorizations(ListVPCAssociationAuthorizationsRequest $args)
    {
        $result = parent::listVPCAssociationAuthorizations($args->toArray());
        return new ListVPCAssociationAuthorizationsResponse($result->toArray());
    }
}
