<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateApplication;

trait UpdateApplicationTrait
{
    /**
     * @param UpdateApplicationRequest $args
     * @return void
     */
    public function updateApplication(UpdateApplicationRequest $args)
    {
        parent::updateApplication($args->toArray());
    }
}
