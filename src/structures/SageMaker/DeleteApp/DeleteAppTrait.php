<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteApp;

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
