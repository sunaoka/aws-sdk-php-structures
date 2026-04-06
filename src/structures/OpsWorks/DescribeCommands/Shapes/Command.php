<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CommandId
 * @property string|null $InstanceId
 * @property string|null $DeploymentId
 * @property string|null $CreatedAt
 * @property string|null $AcknowledgedAt
 * @property string|null $CompletedAt
 * @property string|null $Status
 * @property int|null $ExitCode
 * @property string|null $LogUrl
 * @property string|null $Type
 */
class Command extends Shape
{
    /**
     * @param array{
     *     CommandId?: string|null,
     *     InstanceId?: string|null,
     *     DeploymentId?: string|null,
     *     CreatedAt?: string|null,
     *     AcknowledgedAt?: string|null,
     *     CompletedAt?: string|null,
     *     Status?: string|null,
     *     ExitCode?: int|null,
     *     LogUrl?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
