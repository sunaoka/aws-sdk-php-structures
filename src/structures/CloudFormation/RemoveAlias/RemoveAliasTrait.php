<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RemoveAlias;

trait RemoveAliasTrait
{
    /**
     * @param RemoveAliasRequest $args
     * @return void
     */
    public function removeAlias(RemoveAliasRequest $args)
    {
        parent::removeAlias($args->toArray());
    }
}
