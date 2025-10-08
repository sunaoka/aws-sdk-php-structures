<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateDescription;

trait UpdateApprovalRuleTemplateDescriptionTrait
{
    /**
     * @param UpdateApprovalRuleTemplateDescriptionRequest $args
     * @return UpdateApprovalRuleTemplateDescriptionResponse
     */
    public function updateApprovalRuleTemplateDescription(UpdateApprovalRuleTemplateDescriptionRequest $args)
    {
        $result = parent::updateApprovalRuleTemplateDescription($args->toArray());
        return new UpdateApprovalRuleTemplateDescriptionResponse($result->toArray());
    }
}
