<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $issueId
 * @property string $issueArn
 * @property string $name
 * @property string $synopsis
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $severity
 * @property int<0, 100>|null $confidence
 * @property string|null $severityReasoning
 * @property string|null $summary
 * @property list<string> $findingIds
 * @property 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $status
 * @property 'VALIDATION'|'PRIORITIZATION'|'REMEDIATION'|null $phase
 * @property 'INTERNAL_ERROR'|'REMEDIATION_FAILED'|null $statusReason
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $statusUpdatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'NONE'|'AVAILABLE'|null $evidenceAvailability
 * @property Shapes\IssuePatchDelivery|null $patchDelivery
 */
class GetCodeIssueResponse extends Response
{
}
