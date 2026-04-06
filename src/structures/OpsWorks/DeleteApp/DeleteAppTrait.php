<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteApp;

trait DeleteAppTrait
{
    /**
     * @param DeleteAppRequest $args
     * @return void
     */
    public function deleteApp(DeleteAppRequest $args)
    {
        parent::deleteApp($args->toArray());
    }
}
