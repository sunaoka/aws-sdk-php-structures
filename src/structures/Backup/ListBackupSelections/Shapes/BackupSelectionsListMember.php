<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupSelections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SelectionId
 * @property string $SelectionName
 * @property string $BackupPlanId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $CreatorRequestId
 * @property string $IamRoleArn
 */
class BackupSelectionsListMember extends Shape
{
    /**
     * @param array{
     *     SelectionId?: string,
     *     SelectionName?: string,
     *     BackupPlanId?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string,
     *     IamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
