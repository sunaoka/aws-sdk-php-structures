<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUserGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserGroupId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeUserGroupsRequest extends Request
{
    /**
     * @param array{
     *     UserGroupId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
