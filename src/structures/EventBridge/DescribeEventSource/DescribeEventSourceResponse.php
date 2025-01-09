<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEventSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 * @property string $Name
 * @property 'PENDING'|'ACTIVE'|'DELETED' $State
 */
class DescribeEventSourceResponse extends Response
{
}
