<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN' $ConnectorStatus
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult $LastCheckedAt
 * @property list<HealthIssue>|null $Issues
 */
class CspmHealthCheck extends Shape
{
    /**
     * @param array{
     *     ConnectorStatus: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN',
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
