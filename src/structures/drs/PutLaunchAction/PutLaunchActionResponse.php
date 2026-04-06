<?php

namespace Sunaoka\Aws\Structures\drs\PutLaunchAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $actionCode
 * @property string|null $actionId
 * @property string|null $actionVersion
 * @property bool|null $active
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER'|null $category
 * @property string|null $description
 * @property string|null $name
 * @property bool|null $optional
 * @property int<2, 10000>|null $order
 * @property array<string, Shapes\LaunchActionParameter>|null $parameters
 * @property string|null $resourceId
 * @property 'SSM_AUTOMATION'|'SSM_COMMAND'|null $type
 */
class PutLaunchActionResponse extends Response
{
}
