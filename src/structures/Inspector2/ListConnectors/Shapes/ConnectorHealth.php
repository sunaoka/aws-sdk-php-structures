<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN' $connectorStatus
 * @property \Aws\Api\DateTimeResult $lastCheckedAt
 * @property string|null $message
 */
class ConnectorHealth extends Shape
{
    /**
     * @param array{
     *     connectorStatus: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN',
     *     lastCheckedAt: \Aws\Api\DateTimeResult,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
