<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $KmsKeyIdentifier
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property string|null $Policy
 * @property Shapes\LogConfig|null $LogConfig
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DescribeEventBusResponse extends Response
{
}
