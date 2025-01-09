<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pullRequestId
 * @property \Aws\Api\DateTimeResult $eventDate
 * @property 'PULL_REQUEST_CREATED'|'PULL_REQUEST_STATUS_CHANGED'|'PULL_REQUEST_SOURCE_REFERENCE_UPDATED'|'PULL_REQUEST_MERGE_STATE_CHANGED'|'PULL_REQUEST_APPROVAL_RULE_CREATED'|'PULL_REQUEST_APPROVAL_RULE_UPDATED'|'PULL_REQUEST_APPROVAL_RULE_DELETED'|'PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'|'PULL_REQUEST_APPROVAL_STATE_CHANGED' $pullRequestEventType
 * @property string $actorArn
 * @property PullRequestCreatedEventMetadata $pullRequestCreatedEventMetadata
 * @property PullRequestStatusChangedEventMetadata $pullRequestStatusChangedEventMetadata
 * @property PullRequestSourceReferenceUpdatedEventMetadata $pullRequestSourceReferenceUpdatedEventMetadata
 * @property PullRequestMergedStateChangedEventMetadata $pullRequestMergedStateChangedEventMetadata
 * @property ApprovalRuleEventMetadata $approvalRuleEventMetadata
 * @property ApprovalStateChangedEventMetadata $approvalStateChangedEventMetadata
 * @property ApprovalRuleOverriddenEventMetadata $approvalRuleOverriddenEventMetadata
 */
class PullRequestEvent extends Shape
{
    /**
     * @param array{
     *     pullRequestId?: string,
     *     eventDate?: \Aws\Api\DateTimeResult,
     *     pullRequestEventType?: 'PULL_REQUEST_CREATED'|'PULL_REQUEST_STATUS_CHANGED'|'PULL_REQUEST_SOURCE_REFERENCE_UPDATED'|'PULL_REQUEST_MERGE_STATE_CHANGED'|'PULL_REQUEST_APPROVAL_RULE_CREATED'|'PULL_REQUEST_APPROVAL_RULE_UPDATED'|'PULL_REQUEST_APPROVAL_RULE_DELETED'|'PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'|'PULL_REQUEST_APPROVAL_STATE_CHANGED',
     *     actorArn?: string,
     *     pullRequestCreatedEventMetadata?: PullRequestCreatedEventMetadata,
     *     pullRequestStatusChangedEventMetadata?: PullRequestStatusChangedEventMetadata,
     *     pullRequestSourceReferenceUpdatedEventMetadata?: PullRequestSourceReferenceUpdatedEventMetadata,
     *     pullRequestMergedStateChangedEventMetadata?: PullRequestMergedStateChangedEventMetadata,
     *     approvalRuleEventMetadata?: ApprovalRuleEventMetadata,
     *     approvalStateChangedEventMetadata?: ApprovalStateChangedEventMetadata,
     *     approvalRuleOverriddenEventMetadata?: ApprovalRuleOverriddenEventMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
