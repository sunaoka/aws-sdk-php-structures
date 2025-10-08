<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteApprovalRuleTemplate;

trait DeleteApprovalRuleTemplateTrait
{
    /**
     * @param DeleteApprovalRuleTemplateRequest $args
     * @return DeleteApprovalRuleTemplateResponse
     */
    public function deleteApprovalRuleTemplate(DeleteApprovalRuleTemplateRequest $args)
    {
        $result = parent::deleteApprovalRuleTemplate($args->toArray());
        return new DeleteApprovalRuleTemplateResponse($result->toArray());
    }
}
