<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<string> $worlds
 * @property OutputLocation $outputLocation
 */
class WorldExportJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     status?: 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     worlds?: list<string>,
     *     outputLocation?: OutputLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
