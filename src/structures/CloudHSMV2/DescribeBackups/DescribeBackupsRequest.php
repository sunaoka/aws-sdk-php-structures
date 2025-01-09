<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DescribeBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property array<string, list<string>> $Filters
 * @property bool $Shared
 * @property bool $SortAscending
 */
class DescribeBackupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: array<string, list<string>>,
     *     Shared?: bool,
     *     SortAscending?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
