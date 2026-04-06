<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RequestSpotLaunchSpecification|null $LaunchSpecification
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'hibernate'|'stop'|'terminate'|null $InstanceInterruptionBehavior
 * @property bool|null $DryRun
 * @property string|null $SpotPrice
 * @property string|null $ClientToken
 * @property int|null $InstanceCount
 * @property 'one-time'|'persistent'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property string|null $LaunchGroup
 * @property string|null $AvailabilityZoneGroup
 * @property int|null $BlockDurationMinutes
 */
class RequestSpotInstancesRequest extends Request
{
    /**
     * @param array{
     *     LaunchSpecification?: Shapes\RequestSpotLaunchSpecification|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'|null,
     *     DryRun?: bool|null,
     *     SpotPrice?: string|null,
     *     ClientToken?: string|null,
     *     InstanceCount?: int|null,
     *     Type?: 'one-time'|'persistent'|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     LaunchGroup?: string|null,
     *     AvailabilityZoneGroup?: string|null,
     *     BlockDurationMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
