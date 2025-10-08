<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchAssociateApprovalRuleTemplateWithRepositories;

trait BatchAssociateApprovalRuleTemplateWithRepositoriesTrait
{
    /**
     * @param BatchAssociateApprovalRuleTemplateWithRepositoriesRequest $args
     * @return BatchAssociateApprovalRuleTemplateWithRepositoriesResponse
     */
    public function batchAssociateApprovalRuleTemplateWithRepositories(
        BatchAssociateApprovalRuleTemplateWithRepositoriesRequest $args,
    ) {
        $result = parent::batchAssociateApprovalRuleTemplateWithRepositories($args->toArray());
        return new BatchAssociateApprovalRuleTemplateWithRepositoriesResponse($result->toArray());
    }
}
