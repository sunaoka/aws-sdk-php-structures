<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $FunctionArn
 * @property int<0, 2> $MaximumRetryAttempts
 * @property int<60, 21600> $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 */
class UpdateFunctionEventInvokeConfigResponse extends Response
{
}
