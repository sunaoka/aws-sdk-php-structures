<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\OfferingStatus>|null $current
 * @property array<string, Shapes\OfferingStatus>|null $nextPeriod
 * @property string|null $nextToken
 */
class GetOfferingStatusResponse extends Response
{
}
