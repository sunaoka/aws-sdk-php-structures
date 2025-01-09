<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR' $state
 */
class UpdateEntityResponse extends Response
{
}
