<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate;

trait CreatePrivacyBudgetTemplateTrait
{
    /**
     * @param CreatePrivacyBudgetTemplateRequest $args
     * @return CreatePrivacyBudgetTemplateResponse
     */
    public function createPrivacyBudgetTemplate(CreatePrivacyBudgetTemplateRequest $args)
    {
        $result = parent::createPrivacyBudgetTemplate($args->toArray());
        return new CreatePrivacyBudgetTemplateResponse($result->toArray());
    }
}
