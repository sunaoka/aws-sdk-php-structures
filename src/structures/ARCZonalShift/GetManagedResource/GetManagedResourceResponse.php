<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property array<string, float> $appliedWeights
 * @property list<Shapes\ZonalShiftInResource> $zonalShifts
 * @property list<Shapes\AutoshiftInResource>|null $autoshifts
 * @property Shapes\PracticeRunConfiguration|null $practiceRunConfiguration
 * @property 'ENABLED'|'DISABLED'|null $zonalAutoshiftStatus
 */
class GetManagedResourceResponse extends Response
{
}
