<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationPrivacyBudgetTemplate;

trait GetCollaborationPrivacyBudgetTemplateTrait
{
    /**
     * @param GetCollaborationPrivacyBudgetTemplateRequest $args
     * @return GetCollaborationPrivacyBudgetTemplateResponse
     */
    public function getCollaborationPrivacyBudgetTemplate(GetCollaborationPrivacyBudgetTemplateRequest $args)
    {
        $result = parent::getCollaborationPrivacyBudgetTemplate($args->toArray());
        return new GetCollaborationPrivacyBudgetTemplateResponse($result->toArray());
    }
}
