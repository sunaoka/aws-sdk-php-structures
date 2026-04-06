<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, float>|null $appliedWeights
 * @property string|null $arn
 * @property list<AutoshiftInResource>|null $autoshifts
 * @property list<string> $availabilityZones
 * @property string|null $name
 * @property 'ENABLED'|'DISABLED'|null $practiceRunStatus
 * @property 'ENABLED'|'DISABLED'|null $zonalAutoshiftStatus
 * @property list<ZonalShiftInResource>|null $zonalShifts
 */
class ManagedResourceSummary extends Shape
{
    /**
     * @param array{
     *     appliedWeights?: array<string, float>|null,
     *     arn?: string|null,
     *     autoshifts?: list<AutoshiftInResource>|null,
     *     availabilityZones: list<string>,
     *     name?: string|null,
     *     practiceRunStatus?: 'ENABLED'|'DISABLED'|null,
     *     zonalAutoshiftStatus?: 'ENABLED'|'DISABLED'|null,
     *     zonalShifts?: list<ZonalShiftInResource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
