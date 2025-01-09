<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $serialNumber
 * @property string $name
 * @property string $model
 * @property string $environmentId
 * @property 'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ARCHIVED' $status
 * @property string $currentSoftwareSetId
 * @property string $desiredSoftwareSetId
 * @property string $pendingSoftwareSetId
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 * @property \Aws\Api\DateTimeResult $lastConnectedAt
 * @property \Aws\Api\DateTimeResult $lastPostureAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $arn
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     serialNumber?: string,
     *     name?: string,
     *     model?: string,
     *     environmentId?: string,
     *     status?: 'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ARCHIVED',
     *     currentSoftwareSetId?: string,
     *     desiredSoftwareSetId?: string,
     *     pendingSoftwareSetId?: string,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY',
     *     lastConnectedAt?: \Aws\Api\DateTimeResult,
     *     lastPostureAt?: \Aws\Api\DateTimeResult,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
