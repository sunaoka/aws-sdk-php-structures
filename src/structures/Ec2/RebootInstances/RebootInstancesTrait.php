<?php

namespace Sunaoka\Aws\Structures\Ec2\RebootInstances;

trait RebootInstancesTrait
{
    /**
     * @param RebootInstancesRequest $args
     * @return void
     */
    public function rebootInstances(RebootInstancesRequest $args)
    {
        parent::rebootInstances($args->toArray());
    }
}
