<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas;

trait ListServiceQuotasTrait
{
    /**
     * @param ListServiceQuotasRequest $args
     * @return ListServiceQuotasResponse
     */
    public function listServiceQuotas(ListServiceQuotasRequest $args)
    {
        $result = parent::listServiceQuotas($args->toArray());
        return new ListServiceQuotasResponse($result->toArray());
    }
}
