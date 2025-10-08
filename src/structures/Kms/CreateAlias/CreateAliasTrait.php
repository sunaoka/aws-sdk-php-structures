<?php

namespace Sunaoka\Aws\Structures\Kms\CreateAlias;

trait CreateAliasTrait
{
    /**
     * @param CreateAliasRequest $args
     * @return void
     */
    public function createAlias(CreateAliasRequest $args)
    {
        parent::createAlias($args->toArray());
    }
}
