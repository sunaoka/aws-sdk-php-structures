<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteAlias;

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
