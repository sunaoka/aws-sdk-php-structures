<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $CreatorRequestId
 * @property string $IamRoleArn
 * @property list<string>|null $ProtectedResourceArns
 * @property ProtectedResourceConditions|null $ProtectedResourceConditions
 * @property string $ProtectedResourceType
 * @property array<string, string>|null $RestoreMetadataOverrides
 * @property string $RestoreTestingPlanName
 * @property string $RestoreTestingSelectionName
 * @property int|null $ValidationWindowHours
 */
class RestoreTestingSelectionForGet extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string|null,
     *     IamRoleArn: string,
     *     ProtectedResourceArns?: list<string>|null,
     *     ProtectedResourceConditions?: ProtectedResourceConditions|null,
     *     ProtectedResourceType: string,
     *     RestoreMetadataOverrides?: array<string, string>|null,
     *     RestoreTestingPlanName: string,
     *     RestoreTestingSelectionName: string,
     *     ValidationWindowHours?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
