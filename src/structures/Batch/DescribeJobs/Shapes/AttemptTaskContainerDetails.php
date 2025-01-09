<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $exitCode
 * @property string $name
 * @property string $reason
 * @property string $logStreamName
 * @property list<NetworkInterface> $networkInterfaces
 */
class AttemptTaskContainerDetails extends Shape
{
    /**
     * @param array{
     *     exitCode?: int,
     *     name?: string,
     *     reason?: string,
     *     logStreamName?: string,
     *     networkInterfaces?: list<NetworkInterface>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
