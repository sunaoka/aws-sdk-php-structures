<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $serialNumber
 * @property string|null $name
 * @property string|null $model
 * @property string|null $environmentId
 * @property 'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ARCHIVED'|null $status
 * @property string|null $currentSoftwareSetId
 * @property string|null $currentSoftwareSetVersion
 * @property string|null $desiredSoftwareSetId
 * @property string|null $pendingSoftwareSetId
 * @property string|null $pendingSoftwareSetVersion
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 * @property 'NONE'|'COMPLIANT'|'NOT_COMPLIANT'|null $softwareSetComplianceStatus
 * @property 'AVAILABLE'|'IN_PROGRESS'|'UP_TO_DATE'|null $softwareSetUpdateStatus
 * @property \Aws\Api\DateTimeResult|null $lastConnectedAt
 * @property \Aws\Api\DateTimeResult|null $lastPostureAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $arn
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class Device extends Shape
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
     *     currentSoftwareSetVersion?: string|null,
     *     desiredSoftwareSetId?: string|null,
     *     pendingSoftwareSetId?: string|null,
     *     pendingSoftwareSetVersion?: string|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null,
     *     softwareSetComplianceStatus?: 'NONE'|'COMPLIANT'|'NOT_COMPLIANT'|null,
     *     softwareSetUpdateStatus?: 'AVAILABLE'|'IN_PROGRESS'|'UP_TO_DATE'|null,
     *     lastConnectedAt?: \Aws\Api\DateTimeResult|null,
     *     lastPostureAt?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     arn?: string|null,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
