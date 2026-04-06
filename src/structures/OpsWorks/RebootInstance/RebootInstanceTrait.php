<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RebootInstance;

trait RebootInstanceTrait
{
    /**
     * @param RebootInstanceRequest $args
     * @return void
     */
    public function rebootInstance(RebootInstanceRequest $args)
    {
        parent::rebootInstance($args->toArray());
    }
}
