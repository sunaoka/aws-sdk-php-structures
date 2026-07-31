<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyArn
 * @property string|null $name
 * @property AvailabilitySlo|null $availabilitySlo
 * @property MultiAzTargets|null $multiAz
 * @property MultiRegionTargets|null $multiRegion
 * @property DataRecoveryTargets|null $dataRecovery
 */
class TestRunPolicySnapshot extends Shape
{
    /**
     * @param array{
     *     policyArn?: string|null,
     *     name?: string|null,
     *     availabilitySlo?: AvailabilitySlo|null,
     *     multiAz?: MultiAzTargets|null,
     *     multiRegion?: MultiRegionTargets|null,
     *     dataRecovery?: DataRecoveryTargets|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
