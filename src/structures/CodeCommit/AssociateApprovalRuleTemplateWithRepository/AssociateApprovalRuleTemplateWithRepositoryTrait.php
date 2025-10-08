<?php

namespace Sunaoka\Aws\Structures\CodeCommit\AssociateApprovalRuleTemplateWithRepository;

trait AssociateApprovalRuleTemplateWithRepositoryTrait
{
    /**
     * @param AssociateApprovalRuleTemplateWithRepositoryRequest $args
     * @return void
     */
    public function associateApprovalRuleTemplateWithRepository(AssociateApprovalRuleTemplateWithRepositoryRequest $args)
    {
        parent::associateApprovalRuleTemplateWithRepository($args->toArray());
    }
}
