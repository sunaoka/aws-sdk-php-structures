<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeletePrivacyBudgetTemplate;

trait DeletePrivacyBudgetTemplateTrait
{
    /**
     * @param DeletePrivacyBudgetTemplateRequest $args
     * @return DeletePrivacyBudgetTemplateResponse
     */
    public function deletePrivacyBudgetTemplate(DeletePrivacyBudgetTemplateRequest $args)
    {
        $result = parent::deletePrivacyBudgetTemplate($args->toArray());
        return new DeletePrivacyBudgetTemplateResponse($result->toArray());
    }
}
