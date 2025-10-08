<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\AssociateServiceQuotaTemplate;

trait AssociateServiceQuotaTemplateTrait
{
    /**
     * @param AssociateServiceQuotaTemplateRequest $args
     * @return AssociateServiceQuotaTemplateResponse
     */
    public function associateServiceQuotaTemplate(AssociateServiceQuotaTemplateRequest $args)
    {
        $result = parent::associateServiceQuotaTemplate($args->toArray());
        return new AssociateServiceQuotaTemplateResponse($result->toArray());
    }
}
