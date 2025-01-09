<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 */
class DescribeWorkspaceImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
