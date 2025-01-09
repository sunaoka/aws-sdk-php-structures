<?php

namespace Sunaoka\Aws\Structures\CodeCommit\EvaluatePullRequestApprovalRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $revisionId
 */
class EvaluatePullRequestApprovalRulesRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     revisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
