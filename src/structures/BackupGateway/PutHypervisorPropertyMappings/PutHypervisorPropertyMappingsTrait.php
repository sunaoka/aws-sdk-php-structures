<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutHypervisorPropertyMappings;

trait PutHypervisorPropertyMappingsTrait
{
    /**
     * @param PutHypervisorPropertyMappingsRequest $args
     * @return PutHypervisorPropertyMappingsResponse
     */
    public function putHypervisorPropertyMappings(PutHypervisorPropertyMappingsRequest $args)
    {
        $result = parent::putHypervisorPropertyMappings($args->toArray());
        return new PutHypervisorPropertyMappingsResponse($result->toArray());
    }
}
