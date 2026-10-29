<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetIndexRebuildStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PREPARING'|'REBUILDING'|'COMPLETED'|'FAILED'|'CANCELLED'|'CANCELLING' $status
 * @property 'ALL'|'QUADS'|'DICTIONARIES' $scope
 * @property int<1, max> $concurrency
 * @property 'LOW'|'MEDIUM'|'HIGH' $writeBufferSize
 * @property \Aws\Api\DateTimeResult $startTime
 * @property int $progressPercentage
 * @property \Aws\Api\DateTimeResult|null $estimatedEndTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $failureReason
 */
class GetIndexRebuildStatusResponse extends Response
{
}
