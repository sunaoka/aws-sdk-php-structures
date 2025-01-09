<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string $ServerName
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeBackupsRequest extends Request
{
    /**
     * @param array{
     *     BackupId?: string,
     *     ServerName?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
