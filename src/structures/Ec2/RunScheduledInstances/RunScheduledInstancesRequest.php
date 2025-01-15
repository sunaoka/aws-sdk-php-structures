<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property int|null $InstanceCount
 * @property Shapes\ScheduledInstancesLaunchSpecification $LaunchSpecification
 * @property string $ScheduledInstanceId
 */
class RunScheduledInstancesRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     InstanceCount?: int|null,
     *     LaunchSpecification: Shapes\ScheduledInstancesLaunchSpecification,
     *     ScheduledInstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
