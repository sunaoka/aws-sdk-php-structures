<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ImportHypervisorConfiguration;

trait ImportHypervisorConfigurationTrait
{
    /**
     * @param ImportHypervisorConfigurationRequest $args
     * @return ImportHypervisorConfigurationResponse
     */
    public function importHypervisorConfiguration(ImportHypervisorConfigurationRequest $args)
    {
        $result = parent::importHypervisorConfiguration($args->toArray());
        return new ImportHypervisorConfigurationResponse($result->toArray());
    }
}
