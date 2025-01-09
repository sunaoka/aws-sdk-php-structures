<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldGenerationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $template
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'PartialFailed'|'Canceling'|'Canceled' $status
 * @property WorldCount $worldCount
 * @property int $succeededWorldCount
 * @property int $failedWorldCount
 */
class WorldGenerationJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     template?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     status?: 'Pending'|'Running'|'Completed'|'Failed'|'PartialFailed'|'Canceling'|'Canceled',
     *     worldCount?: WorldCount,
     *     succeededWorldCount?: int,
     *     failedWorldCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
