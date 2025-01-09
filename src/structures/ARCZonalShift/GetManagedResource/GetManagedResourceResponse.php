<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, float> $appliedWeights
 * @property string $arn
 * @property list<Shapes\AutoshiftInResource> $autoshifts
 * @property string $name
 * @property Shapes\PracticeRunConfiguration $practiceRunConfiguration
 * @property 'ENABLED'|'DISABLED' $zonalAutoshiftStatus
 * @property list<Shapes\ZonalShiftInResource> $zonalShifts
 */
class GetManagedResourceResponse extends Response
{
}
