<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListApiDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiDestinationArn
 * @property string $Name
 * @property 'ACTIVE'|'INACTIVE' $ApiDestinationState
 * @property string $ConnectionArn
 * @property string $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE' $HttpMethod
 * @property int<1, max> $InvocationRateLimitPerSecond
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ApiDestination extends Shape
{
    /**
     * @param array{
     *     ApiDestinationArn?: string,
     *     Name?: string,
     *     ApiDestinationState?: 'ACTIVE'|'INACTIVE',
     *     ConnectionArn?: string,
     *     InvocationEndpoint?: string,
     *     HttpMethod?: 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE',
     *     InvocationRateLimitPerSecond?: int<1, max>,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
