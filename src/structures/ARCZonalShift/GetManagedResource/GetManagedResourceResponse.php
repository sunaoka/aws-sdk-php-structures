<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, float> $appliedWeights
 * @property string|null $arn
 * @property list<Shapes\AutoshiftInResource>|null $autoshifts
 * @property string|null $name
 * @property Shapes\PracticeRunConfiguration|null $practiceRunConfiguration
 * @property 'ENABLED'|'DISABLED'|null $zonalAutoshiftStatus
 * @property list<Shapes\ZonalShiftInResource> $zonalShifts
 */
class GetManagedResourceResponse extends Response
{
}
