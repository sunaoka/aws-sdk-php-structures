<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateEmailAddressAlias;

trait DisassociateEmailAddressAliasTrait
{
    /**
     * @param DisassociateEmailAddressAliasRequest $args
     * @return DisassociateEmailAddressAliasResponse
     */
    public function disassociateEmailAddressAlias(DisassociateEmailAddressAliasRequest $args)
    {
        $result = parent::disassociateEmailAddressAlias($args->toArray());
        return new DisassociateEmailAddressAliasResponse($result->toArray());
    }
}
