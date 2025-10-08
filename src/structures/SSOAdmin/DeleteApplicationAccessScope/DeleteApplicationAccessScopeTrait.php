<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplicationAccessScope;

trait DeleteApplicationAccessScopeTrait
{
    /**
     * @param DeleteApplicationAccessScopeRequest $args
     * @return void
     */
    public function deleteApplicationAccessScope(DeleteApplicationAccessScopeRequest $args)
    {
        parent::deleteApplicationAccessScope($args->toArray());
    }
}
