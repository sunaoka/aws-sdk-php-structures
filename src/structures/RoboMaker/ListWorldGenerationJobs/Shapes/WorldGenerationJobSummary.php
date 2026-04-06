<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldGenerationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $template
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'PartialFailed'|'Canceling'|'Canceled'|null $status
 * @property WorldCount|null $worldCount
 * @property int|null $succeededWorldCount
 * @property int|null $failedWorldCount
 */
class WorldGenerationJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     template?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'Pending'|'Running'|'Completed'|'Failed'|'PartialFailed'|'Canceling'|'Canceled'|null,
     *     worldCount?: WorldCount|null,
     *     succeededWorldCount?: int|null,
     *     failedWorldCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
