<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EksAttemptContainerDetail> $containers
 * @property list<EksAttemptContainerDetail> $initContainers
 * @property string $eksClusterArn
 * @property string $podName
 * @property string $podNamespace
 * @property string $nodeName
 * @property int $startedAt
 * @property int $stoppedAt
 * @property string $statusReason
 */
class EksAttemptDetail extends Shape
{
    /**
     * @param array{
     *     containers?: list<EksAttemptContainerDetail>,
     *     initContainers?: list<EksAttemptContainerDetail>,
     *     eksClusterArn?: string,
     *     podName?: string,
     *     podNamespace?: string,
     *     nodeName?: string,
     *     startedAt?: int,
     *     stoppedAt?: int,
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
