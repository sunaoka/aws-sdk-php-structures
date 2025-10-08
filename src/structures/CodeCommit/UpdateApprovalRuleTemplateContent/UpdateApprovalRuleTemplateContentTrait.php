<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateContent;

trait UpdateApprovalRuleTemplateContentTrait
{
    /**
     * @param UpdateApprovalRuleTemplateContentRequest $args
     * @return UpdateApprovalRuleTemplateContentResponse
     */
    public function updateApprovalRuleTemplateContent(UpdateApprovalRuleTemplateContentRequest $args)
    {
        $result = parent::updateApprovalRuleTemplateContent($args->toArray());
        return new UpdateApprovalRuleTemplateContentResponse($result->toArray());
    }
}
