<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\GetProvisionedProductOutputs;

trait GetProvisionedProductOutputsTrait
{
    /**
     * @param GetProvisionedProductOutputsRequest $args
     * @return GetProvisionedProductOutputsResponse
     */
    public function getProvisionedProductOutputs(GetProvisionedProductOutputsRequest $args)
    {
        $result = parent::getProvisionedProductOutputs($args->toArray());
        return new GetProvisionedProductOutputsResponse($result->toArray());
    }
}
