<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\PutServiceQuotaIncreaseRequestIntoTemplate;

trait PutServiceQuotaIncreaseRequestIntoTemplateTrait
{
    /**
     * @param PutServiceQuotaIncreaseRequestIntoTemplateRequest $args
     * @return PutServiceQuotaIncreaseRequestIntoTemplateResponse
     */
    public function putServiceQuotaIncreaseRequestIntoTemplate(
        PutServiceQuotaIncreaseRequestIntoTemplateRequest $args,
    ) {
        $result = parent::putServiceQuotaIncreaseRequestIntoTemplate($args->toArray());
        return new PutServiceQuotaIncreaseRequestIntoTemplateResponse($result->toArray());
    }
}
