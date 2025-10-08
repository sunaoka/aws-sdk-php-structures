<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateComputeQuota;

trait UpdateComputeQuotaTrait
{
    /**
     * @param UpdateComputeQuotaRequest $args
     * @return UpdateComputeQuotaResponse
     */
    public function updateComputeQuota(UpdateComputeQuotaRequest $args)
    {
        $result = parent::updateComputeQuota($args->toArray());
        return new UpdateComputeQuotaResponse($result->toArray());
    }
}
