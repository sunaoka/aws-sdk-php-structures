<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositoriesForApprovalRuleTemplate;

trait ListRepositoriesForApprovalRuleTemplateTrait
{
    /**
     * @param ListRepositoriesForApprovalRuleTemplateRequest $args
     * @return ListRepositoriesForApprovalRuleTemplateResponse
     */
    public function listRepositoriesForApprovalRuleTemplate(ListRepositoriesForApprovalRuleTemplateRequest $args)
    {
        $result = parent::listRepositoriesForApprovalRuleTemplate($args->toArray());
        return new ListRepositoriesForApprovalRuleTemplateResponse($result->toArray());
    }
}
