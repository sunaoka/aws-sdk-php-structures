<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackProvisioningParameters;

trait DescribeStackProvisioningParametersTrait
{
    /**
     * @param DescribeStackProvisioningParametersRequest $args
     * @return DescribeStackProvisioningParametersResponse
     */
    public function describeStackProvisioningParameters(DescribeStackProvisioningParametersRequest $args)
    {
        $result = parent::describeStackProvisioningParameters($args->toArray());
        return new DescribeStackProvisioningParametersResponse($result->toArray());
    }
}
