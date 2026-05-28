<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyArn
 * @property string $name
 * @property AvailabilitySlo|null $availabilitySlo
 * @property MultiAzTargets|null $multiAz
 * @property MultiRegionTargets|null $multiRegion
 * @property DataRecoveryTargets|null $dataRecovery
 * @property int|null $associatedServiceCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PolicySummary extends Shape
{
    /**
     * @param array{
     *     policyArn: string,
     *     name: string,
     *     availabilitySlo?: AvailabilitySlo|null,
     *     multiAz?: MultiAzTargets|null,
     *     multiRegion?: MultiRegionTargets|null,
     *     dataRecovery?: DataRecoveryTargets|null,
     *     associatedServiceCount?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
