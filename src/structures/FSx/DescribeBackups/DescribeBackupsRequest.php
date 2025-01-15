<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $BackupIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBackupsRequest extends Request
{
    /**
     * @param array{
     *     BackupIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
