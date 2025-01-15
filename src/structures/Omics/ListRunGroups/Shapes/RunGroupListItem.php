<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property int<1, 100000>|null $maxCpus
 * @property int<1, 100000>|null $maxRuns
 * @property int<1, 100000>|null $maxDuration
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property int<1, 100000>|null $maxGpus
 */
class RunGroupListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     maxCpus?: int<1, 100000>|null,
     *     maxRuns?: int<1, 100000>|null,
     *     maxDuration?: int<1, 100000>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     maxGpus?: int<1, 100000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
