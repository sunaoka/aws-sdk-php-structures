<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListBackupPlanVersionsRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
