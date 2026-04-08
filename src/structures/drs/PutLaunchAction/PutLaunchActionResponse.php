<?php

namespace Sunaoka\Aws\Structures\drs\PutLaunchAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $resourceId
 * @property string|null $actionId
 * @property string|null $actionCode
 * @property 'SSM_AUTOMATION'|'SSM_COMMAND'|null $type
 * @property string|null $name
 * @property bool|null $active
 * @property int<2, 10000>|null $order
 * @property string|null $actionVersion
 * @property bool|null $optional
 * @property array<string, Shapes\LaunchActionParameter>|null $parameters
 * @property string|null $description
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER'|null $category
 */
class PutLaunchActionResponse extends Response
{
}
