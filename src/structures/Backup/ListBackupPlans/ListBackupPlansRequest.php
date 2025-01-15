<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $IncludeDeleted
 */
class ListBackupPlansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     IncludeDeleted?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
