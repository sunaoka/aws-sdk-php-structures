<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalShift;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $awayFrom
 * @property string $comment
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property string $resourceIdentifier
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED' $status
 * @property string $zonalShiftId
 */
class UpdateZonalShiftResponse extends Response
{
}
