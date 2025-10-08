<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DisassociateApprovalRuleTemplateFromRepository;

trait DisassociateApprovalRuleTemplateFromRepositoryTrait
{
    /**
     * @param DisassociateApprovalRuleTemplateFromRepositoryRequest $args
     * @return void
     */
    public function disassociateApprovalRuleTemplateFromRepository(DisassociateApprovalRuleTemplateFromRepositoryRequest $args)
    {
        parent::disassociateApprovalRuleTemplateFromRepository($args->toArray());
    }
}
