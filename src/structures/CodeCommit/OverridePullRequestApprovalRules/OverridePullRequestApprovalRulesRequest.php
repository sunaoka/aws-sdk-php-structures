<?php

namespace Sunaoka\Aws\Structures\CodeCommit\OverridePullRequestApprovalRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $revisionId
 * @property 'OVERRIDE'|'REVOKE' $overrideStatus
 */
class OverridePullRequestApprovalRulesRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     revisionId: string,
     *     overrideStatus: 'OVERRIDE'|'REVOKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
