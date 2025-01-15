<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class DescribeWorkspaceImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
