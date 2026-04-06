<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteComputeQuota;

trait DeleteComputeQuotaTrait
{
    /**
     * @param DeleteComputeQuotaRequest $args
     * @return void
     */
    public function deleteComputeQuota(DeleteComputeQuotaRequest $args)
    {
        parent::deleteComputeQuota($args->toArray());
    }
}
