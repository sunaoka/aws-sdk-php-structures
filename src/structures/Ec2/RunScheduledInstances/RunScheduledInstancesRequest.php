<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property bool $DryRun
 * @property int $InstanceCount
 * @property Shapes\ScheduledInstancesLaunchSpecification $LaunchSpecification
 * @property string $ScheduledInstanceId
 */
class RunScheduledInstancesRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     InstanceCount?: int,
     *     LaunchSpecification: Shapes\ScheduledInstancesLaunchSpecification,
     *     ScheduledInstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
