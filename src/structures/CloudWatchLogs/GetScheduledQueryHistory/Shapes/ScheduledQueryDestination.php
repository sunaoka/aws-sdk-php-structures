<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQueryHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|null $destinationType
 * @property string|null $destinationIdentifier
 * @property 'IN_PROGRESS'|'CLIENT_ERROR'|'FAILED'|'COMPLETE'|null $status
 * @property string|null $processedIdentifier
 * @property string|null $errorMessage
 */
class ScheduledQueryDestination extends Shape
{
    /**
     * @param array{
     *     destinationType?: 'S3'|null,
     *     destinationIdentifier?: string|null,
     *     status?: 'IN_PROGRESS'|'CLIENT_ERROR'|'FAILED'|'COMPLETE'|null,
     *     processedIdentifier?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
