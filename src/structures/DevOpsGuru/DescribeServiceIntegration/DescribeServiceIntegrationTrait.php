<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeServiceIntegration;

trait DescribeServiceIntegrationTrait
{
    /**
     * @param DescribeServiceIntegrationRequest $args
     * @return DescribeServiceIntegrationResponse
     */
    public function describeServiceIntegration(DescribeServiceIntegrationRequest $args)
    {
        $result = parent::describeServiceIntegration($args->toArray());
        return new DescribeServiceIntegrationResponse($result->toArray());
    }
}
