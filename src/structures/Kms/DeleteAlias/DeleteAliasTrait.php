<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteAlias;

trait DeleteAliasTrait
{
    /**
     * @param DeleteAliasRequest $args
     * @return void
     */
    public function deleteAlias(DeleteAliasRequest $args)
    {
        parent::deleteAlias($args->toArray());
    }
}
