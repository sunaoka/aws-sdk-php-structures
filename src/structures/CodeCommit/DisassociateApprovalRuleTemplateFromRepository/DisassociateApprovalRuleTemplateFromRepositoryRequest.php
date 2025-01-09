<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DisassociateApprovalRuleTemplateFromRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $repositoryName
 */
class DisassociateApprovalRuleTemplateFromRepositoryRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     repositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
