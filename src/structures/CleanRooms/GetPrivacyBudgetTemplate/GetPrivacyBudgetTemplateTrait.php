<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetPrivacyBudgetTemplate;

trait GetPrivacyBudgetTemplateTrait
{
    /**
     * @param GetPrivacyBudgetTemplateRequest $args
     * @return GetPrivacyBudgetTemplateResponse
     */
    public function getPrivacyBudgetTemplate(GetPrivacyBudgetTemplateRequest $args)
    {
        $result = parent::getPrivacyBudgetTemplate($args->toArray());
        return new GetPrivacyBudgetTemplateResponse($result->toArray());
    }
}
