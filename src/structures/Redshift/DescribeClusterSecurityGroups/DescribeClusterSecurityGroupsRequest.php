<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterSecurityGroupName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 */
class DescribeClusterSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
