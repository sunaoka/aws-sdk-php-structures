<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListBackupPlanVersionsRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
