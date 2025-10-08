<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota;

trait DescribeComputeQuotaTrait
{
    /**
     * @param DescribeComputeQuotaRequest $args
     * @return DescribeComputeQuotaResponse
     */
    public function describeComputeQuota(DescribeComputeQuotaRequest $args)
    {
        $result = parent::describeComputeQuota($args->toArray());
        return new DescribeComputeQuotaResponse($result->toArray());
    }
}
