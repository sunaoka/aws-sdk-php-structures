<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'OS'|'NETWORK'|'SIZE' $UpdateType
 * @property string|null $RegionName
 * @property string|null $NextToken
 */
class DescribeUpdateDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UpdateType: 'OS'|'NETWORK'|'SIZE',
     *     RegionName?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
