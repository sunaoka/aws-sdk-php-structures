<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttemptContainerDetail $container
 * @property int $startedAt
 * @property int $stoppedAt
 * @property string $statusReason
 * @property list<AttemptEcsTaskDetails> $taskProperties
 */
class AttemptDetail extends Shape
{
    /**
     * @param array{
     *     container?: AttemptContainerDetail,
     *     startedAt?: int,
     *     stoppedAt?: int,
     *     statusReason?: string,
     *     taskProperties?: list<AttemptEcsTaskDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
