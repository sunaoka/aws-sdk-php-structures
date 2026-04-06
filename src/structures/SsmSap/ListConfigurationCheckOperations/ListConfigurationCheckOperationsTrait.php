<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListConfigurationCheckOperations;

trait ListConfigurationCheckOperationsTrait
{
    /**
     * @param ListConfigurationCheckOperationsRequest $args
     * @return ListConfigurationCheckOperationsResponse
     */
    public function listConfigurationCheckOperations(ListConfigurationCheckOperationsRequest $args)
    {
        $result = parent::listConfigurationCheckOperations($args->toArray());
        return new ListConfigurationCheckOperationsResponse($result->toArray());
    }
}
