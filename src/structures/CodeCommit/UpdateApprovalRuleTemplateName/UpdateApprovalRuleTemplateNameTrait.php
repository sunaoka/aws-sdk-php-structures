<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateName;

trait UpdateApprovalRuleTemplateNameTrait
{
    /**
     * @param UpdateApprovalRuleTemplateNameRequest $args
     * @return UpdateApprovalRuleTemplateNameResponse
     */
    public function updateApprovalRuleTemplateName(UpdateApprovalRuleTemplateNameRequest $args)
    {
        $result = parent::updateApprovalRuleTemplateName($args->toArray());
        return new UpdateApprovalRuleTemplateNameResponse($result->toArray());
    }
}
