<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateSyncJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property 'CREATING'|'INITIALIZING'|'ACTIVE'|'DELETING'|'ERROR' $state
 */
class CreateSyncJobResponse extends Response
{
}
