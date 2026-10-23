<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeIssues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issueId
 * @property string $issueArn
 * @property string $name
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $severity
 * @property int<0, 100>|null $confidence
 * @property 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $status
 * @property 'VALIDATION'|'PRIORITIZATION'|'REMEDIATION'|null $phase
 * @property 'INTERNAL_ERROR'|'REMEDIATION_FAILED'|null $statusReason
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $statusUpdatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IssueSummary extends Shape
{
    /**
     * @param array{
     *     issueId: string,
     *     issueArn: string,
     *     name: string,
     *     severity?: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     confidence?: int<0, 100>|null,
     *     status: 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     phase?: 'VALIDATION'|'PRIORITIZATION'|'REMEDIATION'|null,
     *     statusReason?: 'INTERNAL_ERROR'|'REMEDIATION_FAILED'|null,
     *     statusMessage?: string|null,
     *     statusUpdatedAt: \Aws\Api\DateTimeResult,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
