<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttemptContainerDetail|null $container
 * @property int|null $startedAt
 * @property int|null $stoppedAt
 * @property string|null $statusReason
 * @property list<AttemptEcsTaskDetails>|null $taskProperties
 */
class AttemptDetail extends Shape
{
    /**
     * @param array{
     *     container?: AttemptContainerDetail|null,
     *     startedAt?: int|null,
     *     stoppedAt?: int|null,
     *     statusReason?: string|null,
     *     taskProperties?: list<AttemptEcsTaskDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
