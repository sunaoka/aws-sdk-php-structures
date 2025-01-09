<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property string $arn
 * @property string $componentTypeId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR' $state
 */
class UpdateComponentTypeResponse extends Response
{
}
