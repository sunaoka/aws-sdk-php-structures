<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisorPropertyMappings;

trait GetHypervisorPropertyMappingsTrait
{
    /**
     * @param GetHypervisorPropertyMappingsRequest $args
     * @return GetHypervisorPropertyMappingsResponse
     */
    public function getHypervisorPropertyMappings(GetHypervisorPropertyMappingsRequest $args)
    {
        $result = parent::getHypervisorPropertyMappings($args->toArray());
        return new GetHypervisorPropertyMappingsResponse($result->toArray());
    }
}
