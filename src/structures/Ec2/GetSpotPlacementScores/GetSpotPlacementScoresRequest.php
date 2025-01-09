<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceTypes
 * @property int<1, 2000000000> $TargetCapacity
 * @property 'vcpu'|'memory-mib'|'units' $TargetCapacityUnitType
 * @property bool $SingleAvailabilityZone
 * @property list<string> $RegionNames
 * @property Shapes\InstanceRequirementsWithMetadataRequest $InstanceRequirementsWithMetadata
 * @property bool $DryRun
 * @property int<10, 1000> $MaxResults
 * @property string $NextToken
 */
class GetSpotPlacementScoresRequest extends Request
{
    /**
     * @param array{
     *     InstanceTypes?: list<string>,
     *     TargetCapacity: int<1, 2000000000>,
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units',
     *     SingleAvailabilityZone?: bool,
     *     RegionNames?: list<string>,
     *     InstanceRequirementsWithMetadata?: Shapes\InstanceRequirementsWithMetadataRequest,
     *     DryRun?: bool,
     *     MaxResults?: int<10, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
