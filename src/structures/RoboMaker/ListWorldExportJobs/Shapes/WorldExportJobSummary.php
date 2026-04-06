<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<string>|null $worlds
 * @property OutputLocation|null $outputLocation
 */
class WorldExportJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     status?: 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     worlds?: list<string>|null,
     *     outputLocation?: OutputLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
