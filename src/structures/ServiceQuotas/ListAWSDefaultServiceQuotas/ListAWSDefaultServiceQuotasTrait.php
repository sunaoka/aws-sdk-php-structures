<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListAWSDefaultServiceQuotas;

trait ListAWSDefaultServiceQuotasTrait
{
    /**
     * @param ListAWSDefaultServiceQuotasRequest $args
     * @return ListAWSDefaultServiceQuotasResponse
     */
    public function listAWSDefaultServiceQuotas(ListAWSDefaultServiceQuotasRequest $args)
    {
        $result = parent::listAWSDefaultServiceQuotas($args->toArray());
        return new ListAWSDefaultServiceQuotasResponse($result->toArray());
    }
}
