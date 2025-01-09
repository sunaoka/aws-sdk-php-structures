<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReplicationGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReplicationGroupsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
