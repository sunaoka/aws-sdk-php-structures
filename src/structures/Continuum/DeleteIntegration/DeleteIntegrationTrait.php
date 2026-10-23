<?php

namespace Sunaoka\Aws\Structures\Continuum\DeleteIntegration;

trait DeleteIntegrationTrait
{
    /**
     * @param DeleteIntegrationRequest $args
     * @return void
     */
    public function deleteIntegration(DeleteIntegrationRequest $args)
    {
        parent::deleteIntegration($args->toArray());
    }
}
