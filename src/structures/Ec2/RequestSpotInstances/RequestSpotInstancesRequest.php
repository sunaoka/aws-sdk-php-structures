<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AvailabilityZoneGroup
 * @property int|null $BlockDurationMinutes
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property int|null $InstanceCount
 * @property string|null $LaunchGroup
 * @property Shapes\RequestSpotLaunchSpecification|null $LaunchSpecification
 * @property string|null $SpotPrice
 * @property 'one-time'|'persistent'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'hibernate'|'stop'|'terminate'|null $InstanceInterruptionBehavior
 */
class RequestSpotInstancesRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZoneGroup?: string|null,
     *     BlockDurationMinutes?: int|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     InstanceCount?: int|null,
     *     LaunchGroup?: string|null,
     *     LaunchSpecification?: Shapes\RequestSpotLaunchSpecification|null,
     *     SpotPrice?: string|null,
     *     Type?: 'one-time'|'persistent'|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
