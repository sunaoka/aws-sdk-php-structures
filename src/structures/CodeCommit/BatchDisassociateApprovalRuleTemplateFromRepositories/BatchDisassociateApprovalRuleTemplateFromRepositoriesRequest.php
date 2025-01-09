<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDisassociateApprovalRuleTemplateFromRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property list<string> $repositoryNames
 */
class BatchDisassociateApprovalRuleTemplateFromRepositoriesRequest extends Request
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
