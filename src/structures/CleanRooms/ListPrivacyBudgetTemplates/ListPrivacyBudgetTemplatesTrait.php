<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgetTemplates;

trait ListPrivacyBudgetTemplatesTrait
{
    /**
     * @param ListPrivacyBudgetTemplatesRequest $args
     * @return ListPrivacyBudgetTemplatesResponse
     */
    public function listPrivacyBudgetTemplates(ListPrivacyBudgetTemplatesRequest $args)
    {
        $result = parent::listPrivacyBudgetTemplates($args->toArray());
        return new ListPrivacyBudgetTemplatesResponse($result->toArray());
    }
}
