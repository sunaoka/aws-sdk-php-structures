<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteDatasetIntegration;

trait DeleteDatasetIntegrationTrait
{
    /**
     * @param DeleteDatasetIntegrationRequest $args
     * @return void
     */
    public function deleteDatasetIntegration(DeleteDatasetIntegrationRequest $args)
    {
        parent::deleteDatasetIntegration($args->toArray());
    }
}
