<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $FunctionArn
 * @property int $MaximumRetryAttempts
 * @property int $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 */
class GetFunctionEventInvokeConfigResponse extends Response
{
}
