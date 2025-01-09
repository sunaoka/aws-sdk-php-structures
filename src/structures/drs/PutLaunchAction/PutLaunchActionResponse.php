<?php

namespace Sunaoka\Aws\Structures\drs\PutLaunchAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $actionCode
 * @property string $actionId
 * @property string $actionVersion
 * @property bool $active
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER' $category
 * @property string $description
 * @property string $name
 * @property bool $optional
 * @property int<2, 10000> $order
 * @property array<string, Shapes\LaunchActionParameter> $parameters
 * @property string $resourceId
 * @property 'SSM_AUTOMATION'|'SSM_COMMAND' $type
 */
class PutLaunchActionResponse extends Response
{
}
