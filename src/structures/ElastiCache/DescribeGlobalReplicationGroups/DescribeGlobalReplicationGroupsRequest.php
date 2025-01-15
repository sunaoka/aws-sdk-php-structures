<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeGlobalReplicationGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GlobalReplicationGroupId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $ShowMemberInfo
 */
class DescribeGlobalReplicationGroupsRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     ShowMemberInfo?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
