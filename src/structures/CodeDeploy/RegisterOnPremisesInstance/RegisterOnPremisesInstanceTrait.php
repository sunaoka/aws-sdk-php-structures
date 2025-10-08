<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RegisterOnPremisesInstance;

trait RegisterOnPremisesInstanceTrait
{
    /**
     * @param RegisterOnPremisesInstanceRequest $args
     * @return void
     */
    public function registerOnPremisesInstance(RegisterOnPremisesInstanceRequest $args)
    {
        parent::registerOnPremisesInstance($args->toArray());
    }
}
