<?php

namespace Sunaoka\Aws\Structures\SupportApp\DeleteAccountAlias;

trait DeleteAccountAliasTrait
{
    /**
     * @param DeleteAccountAliasRequest $args
     * @return DeleteAccountAliasResponse
     */
    public function deleteAccountAlias(DeleteAccountAliasRequest $args)
    {
        $result = parent::deleteAccountAlias($args->toArray());
        return new DeleteAccountAliasResponse($result->toArray());
    }
}
