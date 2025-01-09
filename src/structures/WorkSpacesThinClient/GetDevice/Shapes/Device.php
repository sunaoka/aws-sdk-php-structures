<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $serialNumber
 * @property string $name
 * @property string $model
 * @property string $environmentId
 * @property 'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ARCHIVED' $status
 * @property string $currentSoftwareSetId
 * @property string $currentSoftwareSetVersion
 * @property string $desiredSoftwareSetId
 * @property string $pendingSoftwareSetId
 * @property string $pendingSoftwareSetVersion
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 * @property 'NONE'|'COMPLIANT'|'NOT_COMPLIANT' $softwareSetComplianceStatus
 * @property 'AVAILABLE'|'IN_PROGRESS'|'UP_TO_DATE' $softwareSetUpdateStatus
 * @property \Aws\Api\DateTimeResult $lastConnectedAt
 * @property \Aws\Api\DateTimeResult $lastPostureAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $arn
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class Device extends Shape
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
     *     currentSoftwareSetVersion?: string,
     *     desiredSoftwareSetId?: string,
     *     pendingSoftwareSetId?: string,
     *     pendingSoftwareSetVersion?: string,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY',
     *     softwareSetComplianceStatus?: 'NONE'|'COMPLIANT'|'NOT_COMPLIANT',
     *     softwareSetUpdateStatus?: 'AVAILABLE'|'IN_PROGRESS'|'UP_TO_DATE',
     *     lastConnectedAt?: \Aws\Api\DateTimeResult,
     *     lastPostureAt?: \Aws\Api\DateTimeResult,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     arn?: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
