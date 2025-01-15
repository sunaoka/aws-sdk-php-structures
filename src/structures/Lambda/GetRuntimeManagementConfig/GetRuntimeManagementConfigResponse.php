<?php

namespace Sunaoka\Aws\Structures\Lambda\GetRuntimeManagementConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Auto'|'Manual'|'FunctionUpdate'|null $UpdateRuntimeOn
 * @property string|null $RuntimeVersionArn
 * @property string|null $FunctionArn
 */
class GetRuntimeManagementConfigResponse extends Response
{
}
