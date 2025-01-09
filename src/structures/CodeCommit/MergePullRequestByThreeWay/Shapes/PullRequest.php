<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestByThreeWay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pullRequestId
 * @property string $title
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastActivityDate
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property 'OPEN'|'CLOSED' $pullRequestStatus
 * @property string $authorArn
 * @property list<PullRequestTarget> $pullRequestTargets
 * @property string $clientRequestToken
 * @property string $revisionId
 * @property list<ApprovalRule> $approvalRules
 */
class PullRequest extends Shape
{
    /**
     * @param array{
     *     pullRequestId?: string,
     *     title?: string,
     *     description?: string,
     *     lastActivityDate?: \Aws\Api\DateTimeResult,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     pullRequestStatus?: 'OPEN'|'CLOSED',
     *     authorArn?: string,
     *     pullRequestTargets?: list<PullRequestTarget>,
     *     clientRequestToken?: string,
     *     revisionId?: string,
     *     approvalRules?: list<ApprovalRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
