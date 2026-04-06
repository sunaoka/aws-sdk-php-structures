<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteEnvironment;

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
