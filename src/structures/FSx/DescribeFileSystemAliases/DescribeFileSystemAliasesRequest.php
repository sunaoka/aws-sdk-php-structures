<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileSystemAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $FileSystemId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeFileSystemAliasesRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     FileSystemId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
