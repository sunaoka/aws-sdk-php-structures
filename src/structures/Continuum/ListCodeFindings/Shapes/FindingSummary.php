<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property string $findingArn
 * @property string $environmentId
 * @property string $source
 * @property string $sourceFindingId
 * @property \Aws\Api\DateTimeResult $reportedAt
 * @property 'SUBMITTED'|'VALIDATING'|'CONFIRMED'|'DISCARDED' $status
 * @property \Aws\Api\DateTimeResult $statusUpdatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $scanRunId
 * @property string|null $statusMessage
 * @property 'SCANNER_VALIDATED_FALSE_POSITIVE'|'SCANNER_NEEDS_REVIEW'|'FALSE_POSITIVE_VALIDATED_AGAINST_CONTEXT'|'DUPLICATE_OF_OPEN_ISSUE'|'DUPLICATE_OF_CLOSED_ISSUE'|'COMPENSATING_CONTROL_PRESENT'|'OUT_OF_SCOPE'|'INSUFFICIENT_EVIDENCE'|'PROCESSING_FAILED'|'SOURCE_REPO_NOT_FOUND'|null $discardReason
 * @property string|null $discardReasoning
 * @property string|null $duplicateOfIssueId
 * @property string|null $createdIssueId
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property 'CONTINUUM_CODE_VULN'|'CUSTOMER_CODE_VULN' $type
 * @property string $title
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'FATAL'|'OTHER' $severity
 * @property string|null $category
 * @property string|null $filePath
 */
class FindingSummary extends Shape
{
    /**
     * @param array{
     *     findingId: string,
     *     findingArn: string,
     *     environmentId: string,
     *     source: string,
     *     sourceFindingId: string,
     *     reportedAt: \Aws\Api\DateTimeResult,
     *     status: 'SUBMITTED'|'VALIDATING'|'CONFIRMED'|'DISCARDED',
     *     statusUpdatedAt: \Aws\Api\DateTimeResult,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     scanRunId?: string|null,
     *     statusMessage?: string|null,
     *     discardReason?: 'SCANNER_VALIDATED_FALSE_POSITIVE'|'SCANNER_NEEDS_REVIEW'|'FALSE_POSITIVE_VALIDATED_AGAINST_CONTEXT'|'DUPLICATE_OF_OPEN_ISSUE'|'DUPLICATE_OF_CLOSED_ISSUE'|'COMPENSATING_CONTROL_PRESENT'|'OUT_OF_SCOPE'|'INSUFFICIENT_EVIDENCE'|'PROCESSING_FAILED'|'SOURCE_REPO_NOT_FOUND'|null,
     *     discardReasoning?: string|null,
     *     duplicateOfIssueId?: string|null,
     *     createdIssueId?: string|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     type: 'CONTINUUM_CODE_VULN'|'CUSTOMER_CODE_VULN',
     *     title: string,
     *     severity: 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'FATAL'|'OTHER',
     *     category?: string|null,
     *     filePath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
