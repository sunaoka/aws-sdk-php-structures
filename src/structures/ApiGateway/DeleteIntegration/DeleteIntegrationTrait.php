<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteIntegration;

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
