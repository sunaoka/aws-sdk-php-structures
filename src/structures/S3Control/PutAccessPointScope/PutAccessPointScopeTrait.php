<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessPointScope;

trait PutAccessPointScopeTrait
{
    /**
     * @param PutAccessPointScopeRequest $args
     * @return void
     */
    public function putAccessPointScope(PutAccessPointScopeRequest $args)
    {
        parent::putAccessPointScope($args->toArray());
    }
}
