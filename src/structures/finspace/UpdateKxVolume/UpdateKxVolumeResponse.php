<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $environmentId
 * @property string|null $volumeName
 * @property 'NAS_1'|null $volumeType
 * @property string|null $volumeArn
 * @property Shapes\KxNAS1Configuration|null $nas1Configuration
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $description
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property list<string>|null $availabilityZoneIds
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property list<Shapes\KxAttachedCluster>|null $attachedClusters
 */
class UpdateKxVolumeResponse extends Response
{
}
