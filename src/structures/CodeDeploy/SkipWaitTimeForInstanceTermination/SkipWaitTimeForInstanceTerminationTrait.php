<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\SkipWaitTimeForInstanceTermination;

trait SkipWaitTimeForInstanceTerminationTrait
{
    /**
     * @param SkipWaitTimeForInstanceTerminationRequest $args
     * @return void
     */
    public function skipWaitTimeForInstanceTermination(SkipWaitTimeForInstanceTerminationRequest $args)
    {
        parent::skipWaitTimeForInstanceTermination($args->toArray());
    }
}
