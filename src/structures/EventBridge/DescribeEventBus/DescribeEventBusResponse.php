<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property string $KmsKeyIdentifier
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 * @property string $Policy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeEventBusResponse extends Response
{
}
