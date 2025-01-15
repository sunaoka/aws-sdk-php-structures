<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pullRequestId
 * @property string|null $title
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $lastActivityDate
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property 'OPEN'|'CLOSED'|null $pullRequestStatus
 * @property string|null $authorArn
 * @property list<PullRequestTarget>|null $pullRequestTargets
 * @property string|null $clientRequestToken
 * @property string|null $revisionId
 * @property list<ApprovalRule>|null $approvalRules
 */
class PullRequest extends Shape
{
    /**
     * @param array{
     *     pullRequestId?: string|null,
     *     title?: string|null,
     *     description?: string|null,
     *     lastActivityDate?: \Aws\Api\DateTimeResult|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     pullRequestStatus?: 'OPEN'|'CLOSED'|null,
     *     authorArn?: string|null,
     *     pullRequestTargets?: list<PullRequestTarget>|null,
     *     clientRequestToken?: string|null,
     *     revisionId?: string|null,
     *     approvalRules?: list<ApprovalRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
