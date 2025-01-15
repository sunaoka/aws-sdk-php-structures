<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocumentPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'Share' $PermissionType
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeDocumentPermissionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PermissionType: 'Share',
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
