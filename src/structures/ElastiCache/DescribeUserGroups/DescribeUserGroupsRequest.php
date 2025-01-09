<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUserGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserGroupId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeUserGroupsRequest extends Request
{
    /**
     * @param array{
     *     UserGroupId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
