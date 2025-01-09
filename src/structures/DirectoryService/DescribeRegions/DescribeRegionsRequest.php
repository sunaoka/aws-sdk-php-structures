<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RegionName
 * @property string $NextToken
 */
class DescribeRegionsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RegionName?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
