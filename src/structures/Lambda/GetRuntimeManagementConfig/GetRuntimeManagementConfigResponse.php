<?php

namespace Sunaoka\Aws\Structures\Lambda\GetRuntimeManagementConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Auto'|'Manual'|'FunctionUpdate'|null $UpdateRuntimeOn
 * @property string|null $FunctionArn
 * @property string|null $RuntimeVersionArn
 */
class GetRuntimeManagementConfigResponse extends Response
{
}
