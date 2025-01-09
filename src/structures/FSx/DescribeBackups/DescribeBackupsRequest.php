<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $BackupIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeBackupsRequest extends Request
{
    /**
     * @param array{
     *     BackupIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
