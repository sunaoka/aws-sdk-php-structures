<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $serialNumber
 * @property string|null $name
 * @property string|null $model
 * @property string|null $environmentId
 * @property 'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ARCHIVED'|null $status
 * @property string|null $currentSoftwareSetId
 * @property string|null $desiredSoftwareSetId
 * @property string|null $pendingSoftwareSetId
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 * @property \Aws\Api\DateTimeResult|null $lastConnectedAt
 * @property \Aws\Api\DateTimeResult|null $lastPostureAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $arn
 * @property string|null $lastUserId
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     serialNumber?: string|null,
     *     name?: string|null,
     *     model?: string|null,
     *     environmentId?: string|null,
     *     status?: 'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ARCHIVED'|null,
     *     currentSoftwareSetId?: string|null,
     *     desiredSoftwareSetId?: string|null,
     *     pendingSoftwareSetId?: string|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null,
     *     lastConnectedAt?: \Aws\Api\DateTimeResult|null,
     *     lastPostureAt?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     arn?: string|null,
     *     lastUserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
