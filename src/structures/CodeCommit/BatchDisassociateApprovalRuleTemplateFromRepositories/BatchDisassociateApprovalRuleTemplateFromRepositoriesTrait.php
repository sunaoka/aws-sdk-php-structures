<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDisassociateApprovalRuleTemplateFromRepositories;

trait BatchDisassociateApprovalRuleTemplateFromRepositoriesTrait
{
    /**
     * @param BatchDisassociateApprovalRuleTemplateFromRepositoriesRequest $args
     * @return BatchDisassociateApprovalRuleTemplateFromRepositoriesResponse
     */
    public function batchDisassociateApprovalRuleTemplateFromRepositories(BatchDisassociateApprovalRuleTemplateFromRepositoriesRequest $args)
    {
        $result = parent::batchDisassociateApprovalRuleTemplateFromRepositories($args->toArray());
        return new BatchDisassociateApprovalRuleTemplateFromRepositoriesResponse($result->toArray());
    }
}
