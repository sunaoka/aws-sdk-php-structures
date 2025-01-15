<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeEventSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property string|null $Name
 * @property 'PENDING'|'ACTIVE'|'DELETED'|null $State
 */
class DescribeEventSourceResponse extends Response
{
}
