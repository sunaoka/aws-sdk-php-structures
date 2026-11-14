<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkingFlexCostAllocationPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'eni'|'ec2'|'subnet'|'vpc'|'account'|'peering-id'|'cidr'> $ReportingGranularity
 * @property list<'data-transfer'|'data-processing'> $Dimensions
 * @property FlexCostAllocationCidrRangeSpecifications|null $CidrRangeSpecifications
 */
class InstanceFlexCostAllocationPolicyDocument extends Shape
{
    /**
     * @param array{
     *     ReportingGranularity: list<'eni'|'ec2'|'subnet'|'vpc'|'account'|'peering-id'|'cidr'>,
     *     Dimensions: list<'data-transfer'|'data-processing'>,
     *     CidrRangeSpecifications?: FlexCostAllocationCidrRangeSpecifications|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
