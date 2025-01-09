<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeGlobalReplicationGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $ShowMemberInfo
 */
class DescribeGlobalReplicationGroupsRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     ShowMemberInfo?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
