<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerSupportabilityScores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'on-demand'|'spot' $MarketType
 * @property int<1, max> $CapacityAmount
 * @property 'vcpus'|'instances' $CapacityUnit
 * @property list<string> $CapacityAvailabilityZoneIds
 * @property list<string>|null $InstanceTypes
 * @property Shapes\InstanceRequirementsWithMetadataRequest|null $InstanceRequirementsWithMetadata
 * @property bool|null $DryRun
 */
class GetCapacityManagerSupportabilityScoresRequest extends Request
{
    /**
     * @param array{
     *     MarketType: 'on-demand'|'spot',
     *     CapacityAmount: int<1, max>,
     *     CapacityUnit: 'vcpus'|'instances',
     *     CapacityAvailabilityZoneIds: list<string>,
     *     InstanceTypes?: list<string>|null,
     *     InstanceRequirementsWithMetadata?: Shapes\InstanceRequirementsWithMetadataRequest|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
