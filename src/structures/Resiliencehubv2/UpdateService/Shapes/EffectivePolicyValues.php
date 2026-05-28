<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SloSource|null $availabilitySlo
 * @property TargetSource|null $multiAzRto
 * @property TargetSource|null $multiAzRpo
 * @property DisasterRecoverySource|null $multiAzDrApproach
 * @property TargetSource|null $multiRegionRto
 * @property TargetSource|null $multiRegionRpo
 * @property DisasterRecoverySource|null $multiRegionDrApproach
 * @property TargetSource|null $dataRecoveryTimeBetweenBackups
 */
class EffectivePolicyValues extends Shape
{
    /**
     * @param array{
     *     availabilitySlo?: SloSource|null,
     *     multiAzRto?: TargetSource|null,
     *     multiAzRpo?: TargetSource|null,
     *     multiAzDrApproach?: DisasterRecoverySource|null,
     *     multiRegionRto?: TargetSource|null,
     *     multiRegionRpo?: TargetSource|null,
     *     multiRegionDrApproach?: DisasterRecoverySource|null,
     *     dataRecoveryTimeBetweenBackups?: TargetSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
