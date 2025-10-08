<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetApprovalRuleTemplate;

trait GetApprovalRuleTemplateTrait
{
    /**
     * @param GetApprovalRuleTemplateRequest $args
     * @return GetApprovalRuleTemplateResponse
     */
    public function getApprovalRuleTemplate(GetApprovalRuleTemplateRequest $args)
    {
        $result = parent::getApprovalRuleTemplate($args->toArray());
        return new GetApprovalRuleTemplateResponse($result->toArray());
    }
}
