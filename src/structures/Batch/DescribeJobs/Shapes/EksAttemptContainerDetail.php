<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $containerID
 * @property int $exitCode
 * @property string $reason
 */
class EksAttemptContainerDetail extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     containerID?: string,
     *     exitCode?: int,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
