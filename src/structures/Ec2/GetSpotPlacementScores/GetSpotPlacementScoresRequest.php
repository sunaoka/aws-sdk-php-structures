<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceTypes
 * @property int<1, 2000000000> $TargetCapacity
 * @property 'vcpu'|'memory-mib'|'units'|null $TargetCapacityUnitType
 * @property bool|null $SingleAvailabilityZone
 * @property list<string>|null $RegionNames
 * @property Shapes\InstanceRequirementsWithMetadataRequest|null $InstanceRequirementsWithMetadata
 * @property bool|null $DryRun
 * @property int<10, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetSpotPlacementScoresRequest extends Request
{
    /**
     * @param array{
     *     InstanceTypes?: list<string>|null,
     *     TargetCapacity: int<1, 2000000000>,
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units'|null,
     *     SingleAvailabilityZone?: bool|null,
     *     RegionNames?: list<string>|null,
     *     InstanceRequirementsWithMetadata?: Shapes\InstanceRequirementsWithMetadataRequest|null,
     *     DryRun?: bool|null,
     *     MaxResults?: int<10, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
