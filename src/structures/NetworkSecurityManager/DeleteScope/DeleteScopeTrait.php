<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteScope;

trait DeleteScopeTrait
{
    /**
     * @param DeleteScopeRequest $args
     * @return void
     */
    public function deleteScope(DeleteScopeRequest $args)
    {
        parent::deleteScope($args->toArray());
    }
}
