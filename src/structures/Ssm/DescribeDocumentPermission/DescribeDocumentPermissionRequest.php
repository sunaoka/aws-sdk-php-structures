<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocumentPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'Share' $PermissionType
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeDocumentPermissionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PermissionType: 'Share',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
