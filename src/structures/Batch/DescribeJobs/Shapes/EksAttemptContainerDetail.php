<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $containerID
 * @property int|null $exitCode
 * @property string|null $reason
 */
class EksAttemptContainerDetail extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     containerID?: string|null,
     *     exitCode?: int|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
