<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAssociationForServiceQuotaTemplate;

trait GetAssociationForServiceQuotaTemplateTrait
{
    /**
     * @param GetAssociationForServiceQuotaTemplateRequest $args
     * @return GetAssociationForServiceQuotaTemplateResponse
     */
    public function getAssociationForServiceQuotaTemplate(GetAssociationForServiceQuotaTemplateRequest $args)
    {
        $result = parent::getAssociationForServiceQuotaTemplate($args->toArray());
        return new GetAssociationForServiceQuotaTemplateResponse($result->toArray());
    }
}
