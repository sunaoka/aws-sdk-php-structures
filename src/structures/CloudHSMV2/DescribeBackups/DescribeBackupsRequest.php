<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DescribeBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property array<string, list<string>>|null $Filters
 * @property bool|null $Shared
 * @property bool|null $SortAscending
 */
class DescribeBackupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     Filters?: array<string, list<string>>|null,
     *     Shared?: bool|null,
     *     SortAscending?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
