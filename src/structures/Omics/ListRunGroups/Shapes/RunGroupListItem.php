<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property int $maxCpus
 * @property int $maxRuns
 * @property int $maxDuration
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property int $maxGpus
 */
class RunGroupListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     maxCpus?: int,
     *     maxRuns?: int,
     *     maxDuration?: int,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     maxGpus?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
