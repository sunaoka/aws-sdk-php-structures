<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeApiDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApiDestinationArn
 * @property string $Name
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $ApiDestinationState
 * @property string $ConnectionArn
 * @property string $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE' $HttpMethod
 * @property int $InvocationRateLimitPerSecond
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeApiDestinationResponse extends Response
{
}
