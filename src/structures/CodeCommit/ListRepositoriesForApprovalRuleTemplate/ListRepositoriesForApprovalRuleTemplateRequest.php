<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositoriesForApprovalRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListRepositoriesForApprovalRuleTemplateRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
