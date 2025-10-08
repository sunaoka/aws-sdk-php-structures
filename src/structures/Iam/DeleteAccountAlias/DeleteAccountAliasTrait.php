<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteAccountAlias;

trait DeleteAccountAliasTrait
{
    /**
     * @param DeleteAccountAliasRequest $args
     * @return void
     */
    public function deleteAccountAlias(DeleteAccountAliasRequest $args)
    {
        parent::deleteAccountAlias($args->toArray());
    }
}
