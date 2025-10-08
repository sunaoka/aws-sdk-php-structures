<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\CreateHomeRegionControl;

trait CreateHomeRegionControlTrait
{
    /**
     * @param CreateHomeRegionControlRequest $args
     * @return CreateHomeRegionControlResponse
     */
    public function createHomeRegionControl(CreateHomeRegionControlRequest $args)
    {
        $result = parent::createHomeRegionControl($args->toArray());
        return new CreateHomeRegionControlResponse($result->toArray());
    }
}
