<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\DeleteServiceQuotaIncreaseRequestFromTemplate;

trait DeleteServiceQuotaIncreaseRequestFromTemplateTrait
{
    /**
     * @param DeleteServiceQuotaIncreaseRequestFromTemplateRequest $args
     * @return DeleteServiceQuotaIncreaseRequestFromTemplateResponse
     */
    public function deleteServiceQuotaIncreaseRequestFromTemplate(DeleteServiceQuotaIncreaseRequestFromTemplateRequest $args)
    {
        $result = parent::deleteServiceQuotaIncreaseRequestFromTemplate($args->toArray());
        return new DeleteServiceQuotaIncreaseRequestFromTemplateResponse($result->toArray());
    }
}
