<?php

namespace Sunaoka\Aws\Structures\Continuum\DeleteEnvironment;

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
