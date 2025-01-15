<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListApiDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiDestinationArn
 * @property string|null $Name
 * @property 'ACTIVE'|'INACTIVE'|null $ApiDestinationState
 * @property string|null $ConnectionArn
 * @property string|null $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE'|null $HttpMethod
 * @property int<1, max>|null $InvocationRateLimitPerSecond
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ApiDestination extends Shape
{
    /**
     * @param array{
     *     ApiDestinationArn?: string|null,
     *     Name?: string|null,
     *     ApiDestinationState?: 'ACTIVE'|'INACTIVE'|null,
     *     ConnectionArn?: string|null,
     *     InvocationEndpoint?: string|null,
     *     HttpMethod?: 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE'|null,
     *     InvocationRateLimitPerSecond?: int<1, max>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
