<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $FunctionArn
 * @property int $MaximumRetryAttempts
 * @property int $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 */
class UpdateFunctionEventInvokeConfigResponse extends Response
{
}
