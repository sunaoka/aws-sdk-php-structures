<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'OS' $UpdateType
 * @property string $RegionName
 * @property string $NextToken
 */
class DescribeUpdateDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UpdateType: 'OS',
     *     RegionName?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
