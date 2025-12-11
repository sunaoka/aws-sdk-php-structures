<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateEmailAddressAlias;

trait AssociateEmailAddressAliasTrait
{
    /**
     * @param AssociateEmailAddressAliasRequest $args
     * @return AssociateEmailAddressAliasResponse
     */
    public function associateEmailAddressAlias(AssociateEmailAddressAliasRequest $args)
    {
        $result = parent::associateEmailAddressAlias($args->toArray());
        return new AssociateEmailAddressAliasResponse($result->toArray());
    }
}
