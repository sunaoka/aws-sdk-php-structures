<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListApprovalRuleTemplates;

trait ListApprovalRuleTemplatesTrait
{
    /**
     * @param ListApprovalRuleTemplatesRequest $args
     * @return ListApprovalRuleTemplatesResponse
     */
    public function listApprovalRuleTemplates(ListApprovalRuleTemplatesRequest $args)
    {
        $result = parent::listApprovalRuleTemplates($args->toArray());
        return new ListApprovalRuleTemplatesResponse($result->toArray());
    }
}
