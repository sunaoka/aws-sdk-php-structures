<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetConfigurationCheckOperation;

trait GetConfigurationCheckOperationTrait
{
    /**
     * @param GetConfigurationCheckOperationRequest $args
     * @return GetConfigurationCheckOperationResponse
     */
    public function getConfigurationCheckOperation(GetConfigurationCheckOperationRequest $args)
    {
        $result = parent::getConfigurationCheckOperation($args->toArray());
        return new GetConfigurationCheckOperationResponse($result->toArray());
    }
}
