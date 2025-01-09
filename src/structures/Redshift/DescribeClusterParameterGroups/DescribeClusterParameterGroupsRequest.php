<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeClusterParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName?: string,
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
