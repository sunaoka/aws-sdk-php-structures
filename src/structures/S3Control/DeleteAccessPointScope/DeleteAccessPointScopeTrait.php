<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessPointScope;

trait DeleteAccessPointScopeTrait
{
    /**
     * @param DeleteAccessPointScopeRequest $args
     * @return void
     */
    public function deleteAccessPointScope(DeleteAccessPointScopeRequest $args)
    {
        parent::deleteAccessPointScope($args->toArray());
    }
}
