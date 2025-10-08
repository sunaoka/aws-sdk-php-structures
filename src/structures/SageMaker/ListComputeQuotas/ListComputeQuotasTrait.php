<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListComputeQuotas;

trait ListComputeQuotasTrait
{
    /**
     * @param ListComputeQuotasRequest $args
     * @return ListComputeQuotasResponse
     */
    public function listComputeQuotas(ListComputeQuotasRequest $args)
    {
        $result = parent::listComputeQuotas($args->toArray());
        return new ListComputeQuotasResponse($result->toArray());
    }
}
