<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupSelections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SelectionId
 * @property string|null $SelectionName
 * @property string|null $BackupPlanId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $CreatorRequestId
 * @property string|null $IamRoleArn
 */
class BackupSelectionsListMember extends Shape
{
    /**
     * @param array{
     *     SelectionId?: string|null,
     *     SelectionName?: string|null,
     *     BackupPlanId?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CreatorRequestId?: string|null,
     *     IamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
