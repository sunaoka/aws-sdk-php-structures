<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CancelZonalShift;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $zonalShiftId
 * @property string $resourceIdentifier
 * @property string $awayFrom
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED' $status
 * @property string $comment
 */
class CancelZonalShiftResponse extends Response
{
}
