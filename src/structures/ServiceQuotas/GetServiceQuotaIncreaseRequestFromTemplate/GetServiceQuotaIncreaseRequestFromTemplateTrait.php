<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetServiceQuotaIncreaseRequestFromTemplate;

trait GetServiceQuotaIncreaseRequestFromTemplateTrait
{
    /**
     * @param GetServiceQuotaIncreaseRequestFromTemplateRequest $args
     * @return GetServiceQuotaIncreaseRequestFromTemplateResponse
     */
    public function getServiceQuotaIncreaseRequestFromTemplate(GetServiceQuotaIncreaseRequestFromTemplateRequest $args)
    {
        $result = parent::getServiceQuotaIncreaseRequestFromTemplate($args->toArray());
        return new GetServiceQuotaIncreaseRequestFromTemplateResponse($result->toArray());
    }
}
