<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteS3TableIntegration;

trait DeleteS3TableIntegrationTrait
{
    /**
     * @param DeleteS3TableIntegrationRequest $args
     * @return void
     */
    public function deleteS3TableIntegration(DeleteS3TableIntegrationRequest $args)
    {
        parent::deleteS3TableIntegration($args->toArray());
    }
}
