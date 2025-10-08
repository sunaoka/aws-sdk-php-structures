<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DisassociateConfigurationItemsFromApplication;

trait DisassociateConfigurationItemsFromApplicationTrait
{
    /**
     * @param DisassociateConfigurationItemsFromApplicationRequest $args
     * @return DisassociateConfigurationItemsFromApplicationResponse
     */
    public function disassociateConfigurationItemsFromApplication(DisassociateConfigurationItemsFromApplicationRequest $args)
    {
        $result = parent::disassociateConfigurationItemsFromApplication($args->toArray());
        return new DisassociateConfigurationItemsFromApplicationResponse($result->toArray());
    }
}
