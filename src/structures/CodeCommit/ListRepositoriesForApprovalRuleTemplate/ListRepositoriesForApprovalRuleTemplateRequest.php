<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositoriesForApprovalRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListRepositoriesForApprovalRuleTemplateRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
