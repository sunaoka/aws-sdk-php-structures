<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $IncludeDeleted
 */
class ListBackupPlansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     IncludeDeleted?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
