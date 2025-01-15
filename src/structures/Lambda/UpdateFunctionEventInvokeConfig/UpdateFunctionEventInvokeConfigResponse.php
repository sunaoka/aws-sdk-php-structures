<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $FunctionArn
 * @property int<0, 2>|null $MaximumRetryAttempts
 * @property int<60, 21600>|null $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig|null $DestinationConfig
 */
class UpdateFunctionEventInvokeConfigResponse extends Response
{
}
