<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DeleteHomeRegionControl;

trait DeleteHomeRegionControlTrait
{
    /**
     * @param DeleteHomeRegionControlRequest $args
     * @return DeleteHomeRegionControlResponse
     */
    public function deleteHomeRegionControl(DeleteHomeRegionControlRequest $args)
    {
        $result = parent::deleteHomeRegionControl($args->toArray());
        return new DeleteHomeRegionControlResponse($result->toArray());
    }
}
