<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListAssociatedApprovalRuleTemplatesForRepository;

trait ListAssociatedApprovalRuleTemplatesForRepositoryTrait
{
    /**
     * @param ListAssociatedApprovalRuleTemplatesForRepositoryRequest $args
     * @return ListAssociatedApprovalRuleTemplatesForRepositoryResponse
     */
    public function listAssociatedApprovalRuleTemplatesForRepository(
        ListAssociatedApprovalRuleTemplatesForRepositoryRequest $args,
    ) {
        $result = parent::listAssociatedApprovalRuleTemplatesForRepository($args->toArray());
        return new ListAssociatedApprovalRuleTemplatesForRepositoryResponse($result->toArray());
    }
}
