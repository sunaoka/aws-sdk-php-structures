<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerInstanceArn
 * @property string $taskArn
 * @property int $exitCode
 * @property string $reason
 * @property string $logStreamName
 * @property list<NetworkInterface> $networkInterfaces
 */
class AttemptContainerDetail extends Shape
{
    /**
     * @param array{
     *     containerInstanceArn?: string,
     *     taskArn?: string,
     *     exitCode?: int,
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
