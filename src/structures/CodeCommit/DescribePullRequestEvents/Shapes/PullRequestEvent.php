<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pullRequestId
 * @property \Aws\Api\DateTimeResult|null $eventDate
 * @property 'PULL_REQUEST_CREATED'|'PULL_REQUEST_STATUS_CHANGED'|'PULL_REQUEST_SOURCE_REFERENCE_UPDATED'|'PULL_REQUEST_MERGE_STATE_CHANGED'|'PULL_REQUEST_APPROVAL_RULE_CREATED'|'PULL_REQUEST_APPROVAL_RULE_UPDATED'|'PULL_REQUEST_APPROVAL_RULE_DELETED'|'PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'|'PULL_REQUEST_APPROVAL_STATE_CHANGED'|null $pullRequestEventType
 * @property string|null $actorArn
 * @property PullRequestCreatedEventMetadata|null $pullRequestCreatedEventMetadata
 * @property PullRequestStatusChangedEventMetadata|null $pullRequestStatusChangedEventMetadata
 * @property PullRequestSourceReferenceUpdatedEventMetadata|null $pullRequestSourceReferenceUpdatedEventMetadata
 * @property PullRequestMergedStateChangedEventMetadata|null $pullRequestMergedStateChangedEventMetadata
 * @property ApprovalRuleEventMetadata|null $approvalRuleEventMetadata
 * @property ApprovalStateChangedEventMetadata|null $approvalStateChangedEventMetadata
 * @property ApprovalRuleOverriddenEventMetadata|null $approvalRuleOverriddenEventMetadata
 */
class PullRequestEvent extends Shape
{
    /**
     * @param array{
     *     pullRequestId?: string|null,
     *     eventDate?: \Aws\Api\DateTimeResult|null,
     *     pullRequestEventType?: 'PULL_REQUEST_CREATED'|'PULL_REQUEST_STATUS_CHANGED'|'PULL_REQUEST_SOURCE_REFERENCE_UPDATED'|'PULL_REQUEST_MERGE_STATE_CHANGED'|'PULL_REQUEST_APPROVAL_RULE_CREATED'|'PULL_REQUEST_APPROVAL_RULE_UPDATED'|'PULL_REQUEST_APPROVAL_RULE_DELETED'|'PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'|'PULL_REQUEST_APPROVAL_STATE_CHANGED'|null,
     *     actorArn?: string|null,
     *     pullRequestCreatedEventMetadata?: PullRequestCreatedEventMetadata|null,
     *     pullRequestStatusChangedEventMetadata?: PullRequestStatusChangedEventMetadata|null,
     *     pullRequestSourceReferenceUpdatedEventMetadata?: PullRequestSourceReferenceUpdatedEventMetadata|null,
     *     pullRequestMergedStateChangedEventMetadata?: PullRequestMergedStateChangedEventMetadata|null,
     *     approvalRuleEventMetadata?: ApprovalRuleEventMetadata|null,
     *     approvalStateChangedEventMetadata?: ApprovalStateChangedEventMetadata|null,
     *     approvalRuleOverriddenEventMetadata?: ApprovalRuleOverriddenEventMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
