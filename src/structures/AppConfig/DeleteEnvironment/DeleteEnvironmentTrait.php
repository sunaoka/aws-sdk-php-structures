<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteEnvironment;

trait DeleteEnvironmentTrait
{
    /**
     * @param DeleteEnvironmentRequest $args
     * @return void
     */
    public function deleteEnvironment(DeleteEnvironmentRequest $args)
    {
        parent::deleteEnvironment($args->toArray());
    }
}
