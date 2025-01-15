<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string|null $RegionName
 * @property string|null $NextToken
 */
class DescribeRegionsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RegionName?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
