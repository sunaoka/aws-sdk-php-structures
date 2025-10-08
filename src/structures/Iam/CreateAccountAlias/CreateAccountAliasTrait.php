<?php

namespace Sunaoka\Aws\Structures\Iam\CreateAccountAlias;

trait CreateAccountAliasTrait
{
    /**
     * @param CreateAccountAliasRequest $args
     * @return void
     */
    public function createAccountAlias(CreateAccountAliasRequest $args)
    {
        parent::createAccountAlias($args->toArray());
    }
}
