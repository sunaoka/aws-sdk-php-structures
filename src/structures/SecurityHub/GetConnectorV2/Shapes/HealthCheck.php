<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN' $ConnectorStatus
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult $LastCheckedAt
 * @property list<HealthIssue>|null $Issues
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     ConnectorStatus: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN',
     *     Message?: string|null,
     *     LastCheckedAt: \Aws\Api\DateTimeResult,
     *     Issues?: list<HealthIssue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
