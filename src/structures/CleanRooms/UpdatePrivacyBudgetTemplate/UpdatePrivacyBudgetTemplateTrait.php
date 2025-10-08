<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdatePrivacyBudgetTemplate;

trait UpdatePrivacyBudgetTemplateTrait
{
    /**
     * @param UpdatePrivacyBudgetTemplateRequest $args
     * @return UpdatePrivacyBudgetTemplateResponse
     */
    public function updatePrivacyBudgetTemplate(UpdatePrivacyBudgetTemplateRequest $args)
    {
        $result = parent::updatePrivacyBudgetTemplate($args->toArray());
        return new UpdatePrivacyBudgetTemplateResponse($result->toArray());
    }
}
