<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgetTemplates;

trait ListCollaborationPrivacyBudgetTemplatesTrait
{
    /**
     * @param ListCollaborationPrivacyBudgetTemplatesRequest $args
     * @return ListCollaborationPrivacyBudgetTemplatesResponse
     */
    public function listCollaborationPrivacyBudgetTemplates(ListCollaborationPrivacyBudgetTemplatesRequest $args)
    {
        $result = parent::listCollaborationPrivacyBudgetTemplates($args->toArray());
        return new ListCollaborationPrivacyBudgetTemplatesResponse($result->toArray());
    }
}
