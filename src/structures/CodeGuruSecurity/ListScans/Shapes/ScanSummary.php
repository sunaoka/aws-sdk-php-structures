<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $runId
 * @property string $scanName
 * @property string|null $scanNameArn
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ScanSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     runId: string,
     *     scanName: string,
     *     scanNameArn?: string|null,
     *     scanState: 'InProgress'|'Successful'|'Failed',
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
