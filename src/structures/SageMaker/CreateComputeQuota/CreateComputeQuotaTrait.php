<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateComputeQuota;

trait CreateComputeQuotaTrait
{
    /**
     * @param CreateComputeQuotaRequest $args
     * @return CreateComputeQuotaResponse
     */
    public function createComputeQuota(CreateComputeQuotaRequest $args)
    {
        $result = parent::createComputeQuota($args->toArray());
        return new CreateComputeQuotaResponse($result->toArray());
    }
}
