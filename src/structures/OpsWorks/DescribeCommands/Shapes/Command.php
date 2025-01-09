<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property string $DeploymentId
 * @property string $CreatedAt
 * @property string $AcknowledgedAt
 * @property string $CompletedAt
 * @property string $Status
 * @property int $ExitCode
 * @property string $LogUrl
 * @property string $Type
 */
class Command extends Shape
{
    /**
     * @param array{
     *     CommandId?: string,
     *     InstanceId?: string,
     *     DeploymentId?: string,
     *     CreatedAt?: string,
     *     AcknowledgedAt?: string,
     *     CompletedAt?: string,
     *     Status?: string,
     *     ExitCode?: int,
     *     LogUrl?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
