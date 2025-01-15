<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $volumeName
 * @property 'NAS_1'|null $volumeType
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $description
 * @property string|null $statusReason
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property list<string>|null $availabilityZoneIds
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 */
class KxVolume extends Shape
{
    /**
     * @param array{
     *     volumeName?: string|null,
     *     volumeType?: 'NAS_1'|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED'|null,
     *     description?: string|null,
     *     statusReason?: string|null,
     *     azMode?: 'SINGLE'|'MULTI'|null,
     *     availabilityZoneIds?: list<string>|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
