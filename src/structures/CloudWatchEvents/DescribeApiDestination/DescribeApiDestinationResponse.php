<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeApiDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApiDestinationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $ApiDestinationState
 * @property string|null $ConnectionArn
 * @property string|null $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE'|null $HttpMethod
 * @property int<1, max>|null $InvocationRateLimitPerSecond
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DescribeApiDestinationResponse extends Response
{
}
