<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\DisassociateServiceQuotaTemplate;

trait DisassociateServiceQuotaTemplateTrait
{
    /**
     * @param DisassociateServiceQuotaTemplateRequest $args
     * @return DisassociateServiceQuotaTemplateResponse
     */
    public function disassociateServiceQuotaTemplate(DisassociateServiceQuotaTemplateRequest $args)
    {
        $result = parent::disassociateServiceQuotaTemplate($args->toArray());
        return new DisassociateServiceQuotaTemplateResponse($result->toArray());
    }
}
