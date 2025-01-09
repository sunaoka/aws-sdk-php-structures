<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property int<1, 100000> $maxCpus
 * @property int<1, 100000> $maxRuns
 * @property int<1, 100000> $maxDuration
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property int<1, 100000> $maxGpus
 */
class RunGroupListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     maxCpus?: int<1, 100000>,
     *     maxRuns?: int<1, 100000>,
     *     maxDuration?: int<1, 100000>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     maxGpus?: int<1, 100000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
