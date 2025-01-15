<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EksAttemptContainerDetail>|null $containers
 * @property list<EksAttemptContainerDetail>|null $initContainers
 * @property string|null $eksClusterArn
 * @property string|null $podName
 * @property string|null $podNamespace
 * @property string|null $nodeName
 * @property int|null $startedAt
 * @property int|null $stoppedAt
 * @property string|null $statusReason
 */
class EksAttemptDetail extends Shape
{
    /**
     * @param array{
     *     containers?: list<EksAttemptContainerDetail>|null,
     *     initContainers?: list<EksAttemptContainerDetail>|null,
     *     eksClusterArn?: string|null,
     *     podName?: string|null,
     *     podNamespace?: string|null,
     *     nodeName?: string|null,
     *     startedAt?: int|null,
     *     stoppedAt?: int|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
