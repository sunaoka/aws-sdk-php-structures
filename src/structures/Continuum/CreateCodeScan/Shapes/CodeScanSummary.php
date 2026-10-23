<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCodeScan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanRunId
 * @property 'SUBMITTED'|'WAITING_FOR_BUILD'|'BUILDING'|'WAITING_FOR_SCAN'|'SCANNING'|'SUCCEEDED'|'FAILED' $status
 * @property 'MANUAL'|'SCHEDULED' $origin
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property string|null $failureMessage
 * @property 'SUBMITTED'|'WAITING_FOR_BUILD'|'BUILDING'|'WAITING_FOR_SCAN'|'SCANNING'|null $failureStage
 */
class CodeScanSummary extends Shape
{
    /**
     * @param array{
     *     scanRunId: string,
     *     status: 'SUBMITTED'|'WAITING_FOR_BUILD'|'BUILDING'|'WAITING_FOR_SCAN'|'SCANNING'|'SUCCEEDED'|'FAILED',
     *     origin: 'MANUAL'|'SCHEDULED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     failureMessage?: string|null,
     *     failureStage?: 'SUBMITTED'|'WAITING_FOR_BUILD'|'BUILDING'|'WAITING_FOR_SCAN'|'SCANNING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
