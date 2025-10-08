<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters;

trait DescribeProvisioningParametersTrait
{
    /**
     * @param DescribeProvisioningParametersRequest $args
     * @return DescribeProvisioningParametersResponse
     */
    public function describeProvisioningParameters(DescribeProvisioningParametersRequest $args)
    {
        $result = parent::describeProvisioningParameters($args->toArray());
        return new DescribeProvisioningParametersResponse($result->toArray());
    }
}
