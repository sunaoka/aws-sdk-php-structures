<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, float> $appliedWeights
 * @property string $arn
 * @property list<AutoshiftInResource> $autoshifts
 * @property list<string> $availabilityZones
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $practiceRunStatus
 * @property 'ENABLED'|'DISABLED' $zonalAutoshiftStatus
 * @property list<ZonalShiftInResource> $zonalShifts
 */
class ManagedResourceSummary extends Shape
{
    /**
     * @param array{
     *     appliedWeights?: array<string, float>,
     *     arn?: string,
     *     autoshifts?: list<AutoshiftInResource>,
     *     availabilityZones: list<string>,
     *     name?: string,
     *     practiceRunStatus?: 'ENABLED'|'DISABLED',
     *     zonalAutoshiftStatus?: 'ENABLED'|'DISABLED',
     *     zonalShifts?: list<ZonalShiftInResource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
