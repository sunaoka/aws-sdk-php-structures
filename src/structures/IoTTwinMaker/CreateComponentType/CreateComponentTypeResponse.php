<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR' $state
 */
class CreateComponentTypeResponse extends Response
{
}
