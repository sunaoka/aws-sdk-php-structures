<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $entityId
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR' $state
 */
class CreateEntityResponse extends Response
{
}
