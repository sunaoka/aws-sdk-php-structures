<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateApprovalRuleTemplate;

trait CreateApprovalRuleTemplateTrait
{
    /**
     * @param CreateApprovalRuleTemplateRequest $args
     * @return CreateApprovalRuleTemplateResponse
     */
    public function createApprovalRuleTemplate(CreateApprovalRuleTemplateRequest $args)
    {
        $result = parent::createApprovalRuleTemplate($args->toArray());
        return new CreateApprovalRuleTemplateResponse($result->toArray());
    }
}
