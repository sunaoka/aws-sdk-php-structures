<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property list<string> $availabilityZones
 * @property array<string, float>|null $appliedWeights
 * @property list<ZonalShiftInResource>|null $zonalShifts
 * @property list<AutoshiftInResource>|null $autoshifts
 * @property 'ENABLED'|'DISABLED'|null $zonalAutoshiftStatus
 * @property 'ENABLED'|'DISABLED'|null $practiceRunStatus
 */
class ManagedResourceSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     availabilityZones: list<string>,
     *     appliedWeights?: array<string, float>|null,
     *     zonalShifts?: list<ZonalShiftInResource>|null,
     *     autoshifts?: list<AutoshiftInResource>|null,
     *     zonalAutoshiftStatus?: 'ENABLED'|'DISABLED'|null,
     *     practiceRunStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
