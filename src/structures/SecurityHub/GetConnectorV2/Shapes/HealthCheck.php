<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION' $ConnectorStatus
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult $LastCheckedAt
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     ConnectorStatus: 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION',
     *     Message?: string|null,
     *     LastCheckedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
