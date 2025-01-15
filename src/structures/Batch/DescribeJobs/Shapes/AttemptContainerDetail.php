<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerInstanceArn
 * @property string|null $taskArn
 * @property int|null $exitCode
 * @property string|null $reason
 * @property string|null $logStreamName
 * @property list<NetworkInterface>|null $networkInterfaces
 */
class AttemptContainerDetail extends Shape
{
    /**
     * @param array{
     *     containerInstanceArn?: string|null,
     *     taskArn?: string|null,
     *     exitCode?: int|null,
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
