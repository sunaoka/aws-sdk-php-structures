<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateAlias;

trait UpdateAliasTrait
{
    /**
     * @param UpdateAliasRequest $args
     * @return void
     */
    public function updateAlias(UpdateAliasRequest $args)
    {
        parent::updateAlias($args->toArray());
    }
}
