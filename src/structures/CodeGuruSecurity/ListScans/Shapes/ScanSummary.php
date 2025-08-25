<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $scanName
 * @property string $runId
 * @property string|null $scanNameArn
 */
class ScanSummary extends Shape
{
    /**
     * @param array{
     *     scanState: 'InProgress'|'Successful'|'Failed',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     scanName: string,
     *     runId: string,
     *     scanNameArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
