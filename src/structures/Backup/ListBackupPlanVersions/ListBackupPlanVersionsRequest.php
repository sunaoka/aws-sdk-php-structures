<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListBackupPlanVersionsRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
