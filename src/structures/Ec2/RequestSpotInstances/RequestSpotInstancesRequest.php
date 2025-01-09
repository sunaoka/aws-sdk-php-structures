<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RequestSpotLaunchSpecification $LaunchSpecification
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property 'hibernate'|'stop'|'terminate' $InstanceInterruptionBehavior
 * @property bool $DryRun
 * @property string $SpotPrice
 * @property string $ClientToken
 * @property int $InstanceCount
 * @property 'one-time'|'persistent' $Type
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property string $LaunchGroup
 * @property string $AvailabilityZoneGroup
 * @property int $BlockDurationMinutes
 */
class RequestSpotInstancesRequest extends Request
{
    /**
     * @param array{
     *     LaunchSpecification?: Shapes\RequestSpotLaunchSpecification,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate',
     *     DryRun?: bool,
     *     SpotPrice?: string,
     *     ClientToken?: string,
     *     InstanceCount?: int,
     *     Type?: 'one-time'|'persistent',
     *     ValidFrom?: \Aws\Api\DateTimeResult,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     LaunchGroup?: string,
     *     AvailabilityZoneGroup?: string,
     *     BlockDurationMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
