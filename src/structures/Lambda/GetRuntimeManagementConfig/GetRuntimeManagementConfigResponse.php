<?php

namespace Sunaoka\Aws\Structures\Lambda\GetRuntimeManagementConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Auto'|'Manual'|'FunctionUpdate' $UpdateRuntimeOn
 * @property string $RuntimeVersionArn
 * @property string $FunctionArn
 */
class GetRuntimeManagementConfigResponse extends Response
{
}
