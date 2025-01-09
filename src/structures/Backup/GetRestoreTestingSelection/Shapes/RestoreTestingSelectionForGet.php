<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $CreatorRequestId
 * @property string $IamRoleArn
 * @property list<string> $ProtectedResourceArns
 * @property ProtectedResourceConditions $ProtectedResourceConditions
 * @property string $ProtectedResourceType
 * @property array<string, string> $RestoreMetadataOverrides
 * @property string $RestoreTestingPlanName
 * @property string $RestoreTestingSelectionName
 * @property int $ValidationWindowHours
 */
class RestoreTestingSelectionForGet extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string,
     *     IamRoleArn: string,
     *     ProtectedResourceArns?: list<string>,
     *     ProtectedResourceConditions?: ProtectedResourceConditions,
     *     ProtectedResourceType: string,
     *     RestoreMetadataOverrides?: array<string, string>,
     *     RestoreTestingPlanName: string,
     *     RestoreTestingSelectionName: string,
     *     ValidationWindowHours?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
