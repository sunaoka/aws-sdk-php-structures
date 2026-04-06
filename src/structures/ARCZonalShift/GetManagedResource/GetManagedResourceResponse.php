<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, float> $appliedWeights
 * @property string|null $arn
 * @property string|null $name
 * @property list<Shapes\ZonalShiftInResource> $zonalShifts
 */
class GetManagedResourceResponse extends Response
{
}
