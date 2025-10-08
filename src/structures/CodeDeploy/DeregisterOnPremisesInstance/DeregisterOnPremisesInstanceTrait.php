<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeregisterOnPremisesInstance;

trait DeregisterOnPremisesInstanceTrait
{
    /**
     * @param DeregisterOnPremisesInstanceRequest $args
     * @return void
     */
    public function deregisterOnPremisesInstance(DeregisterOnPremisesInstanceRequest $args)
    {
        parent::deregisterOnPremisesInstance($args->toArray());
    }
}
