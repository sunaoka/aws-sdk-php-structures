<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BackupId
 * @property string|null $ServerName
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class DescribeBackupsRequest extends Request
{
    /**
     * @param array{
     *     BackupId?: string|null,
     *     ServerName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
