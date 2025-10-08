<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotaIncreaseRequestsInTemplate;

trait ListServiceQuotaIncreaseRequestsInTemplateTrait
{
    /**
     * @param ListServiceQuotaIncreaseRequestsInTemplateRequest $args
     * @return ListServiceQuotaIncreaseRequestsInTemplateResponse
     */
    public function listServiceQuotaIncreaseRequestsInTemplate(
        ListServiceQuotaIncreaseRequestsInTemplateRequest $args,
    ) {
        $result = parent::listServiceQuotaIncreaseRequestsInTemplate($args->toArray());
        return new ListServiceQuotaIncreaseRequestsInTemplateResponse($result->toArray());
    }
}
