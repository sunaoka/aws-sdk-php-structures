<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionScalingConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FunctionArn
 * @property Shapes\FunctionScalingConfig|null $AppliedFunctionScalingConfig
 * @property Shapes\FunctionScalingConfig|null $RequestedFunctionScalingConfig
 */
class GetFunctionScalingConfigResponse extends Response
{
}
