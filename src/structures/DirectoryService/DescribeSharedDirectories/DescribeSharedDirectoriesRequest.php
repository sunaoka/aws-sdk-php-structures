<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSharedDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OwnerDirectoryId
 * @property list<string>|null $SharedDirectoryIds
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class DescribeSharedDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     OwnerDirectoryId: string,
     *     SharedDirectoryIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
