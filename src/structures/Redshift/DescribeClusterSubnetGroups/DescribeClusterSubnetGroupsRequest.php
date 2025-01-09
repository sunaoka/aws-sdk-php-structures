<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSubnetGroupName
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeClusterSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterSubnetGroupName?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
