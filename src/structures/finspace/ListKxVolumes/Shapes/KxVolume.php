<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $volumeName
 * @property 'NAS_1' $volumeType
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $description
 * @property string $statusReason
 * @property 'SINGLE'|'MULTI' $azMode
 * @property list<string> $availabilityZoneIds
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 */
class KxVolume extends Shape
{
    /**
     * @param array{
     *     volumeName?: string,
     *     volumeType?: 'NAS_1',
     *     status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     description?: string,
     *     statusReason?: string,
     *     azMode?: 'SINGLE'|'MULTI',
     *     availabilityZoneIds?: list<string>,
     *     createdTimestamp?: \Aws\Api\DateTimeResult,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
