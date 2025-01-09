<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\OfferingStatus> $current
 * @property array<string, Shapes\OfferingStatus> $nextPeriod
 * @property string $nextToken
 */
class GetOfferingStatusResponse extends Response
{
}
