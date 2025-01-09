<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchAssociateApprovalRuleTemplateWithRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property list<string> $repositoryNames
 */
class BatchAssociateApprovalRuleTemplateWithRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     repositoryNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
