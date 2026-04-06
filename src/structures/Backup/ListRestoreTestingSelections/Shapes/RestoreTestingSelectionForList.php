<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingSelections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $IamRoleArn
 * @property string $ProtectedResourceType
 * @property string $RestoreTestingPlanName
 * @property string $RestoreTestingSelectionName
 * @property int|null $ValidationWindowHours
 */
class RestoreTestingSelectionForList extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     IamRoleArn: string,
     *     ProtectedResourceType: string,
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
