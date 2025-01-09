<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $environmentId
 * @property string $volumeName
 * @property 'NAS_1' $volumeType
 * @property string $volumeArn
 * @property Shapes\KxNAS1Configuration $nas1Configuration
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $description
 * @property list<string> $availabilityZoneIds
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 */
class CreateKxVolumeResponse extends Response
{
}
