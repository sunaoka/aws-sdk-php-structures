<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReplicationGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReplicationGroupId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReplicationGroupsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
