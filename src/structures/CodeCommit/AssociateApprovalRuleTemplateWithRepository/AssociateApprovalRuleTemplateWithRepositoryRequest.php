<?php

namespace Sunaoka\Aws\Structures\CodeCommit\AssociateApprovalRuleTemplateWithRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $repositoryName
 */
class AssociateApprovalRuleTemplateWithRepositoryRequest extends Request
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
