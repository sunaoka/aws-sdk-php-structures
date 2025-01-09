<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSharedDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OwnerDirectoryId
 * @property list<string> $SharedDirectoryIds
 * @property string $NextToken
 * @property int<0, max> $Limit
 */
class DescribeSharedDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     OwnerDirectoryId: string,
     *     SharedDirectoryIds?: list<string>,
     *     NextToken?: string,
     *     Limit?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
