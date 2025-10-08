<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAccessScope;

trait PutApplicationAccessScopeTrait
{
    /**
     * @param PutApplicationAccessScopeRequest $args
     * @return void
     */
    public function putApplicationAccessScope(PutApplicationAccessScopeRequest $args)
    {
        parent::putApplicationAccessScope($args->toArray());
    }
}
