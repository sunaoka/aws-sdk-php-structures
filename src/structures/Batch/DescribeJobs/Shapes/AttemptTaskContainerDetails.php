<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $exitCode
 * @property string|null $name
 * @property string|null $reason
 * @property string|null $logStreamName
 * @property list<NetworkInterface>|null $networkInterfaces
 */
class AttemptTaskContainerDetails extends Shape
{
    /**
     * @param array{
     *     exitCode?: int|null,
     *     name?: string|null,
     *     reason?: string|null,
     *     logStreamName?: string|null,
     *     networkInterfaces?: list<NetworkInterface>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
