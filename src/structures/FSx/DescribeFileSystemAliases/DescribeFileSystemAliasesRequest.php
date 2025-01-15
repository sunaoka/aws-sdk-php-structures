<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileSystemAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $FileSystemId
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeFileSystemAliasesRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemId: string,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
