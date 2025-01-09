<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSecurityGroupName
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeClusterSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string,
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
