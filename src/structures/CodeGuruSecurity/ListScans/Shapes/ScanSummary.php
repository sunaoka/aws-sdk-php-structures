<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $runId
 * @property string $scanName
 * @property string $scanNameArn
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ScanSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     runId: string,
     *     scanName: string,
     *     scanNameArn?: string,
     *     scanState: 'InProgress'|'Successful'|'Failed',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
