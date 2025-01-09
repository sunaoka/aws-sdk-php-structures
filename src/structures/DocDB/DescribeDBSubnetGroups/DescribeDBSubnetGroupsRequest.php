<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSubnetGroupName
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBSubnetGroupName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
