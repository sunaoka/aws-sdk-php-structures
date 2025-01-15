<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBSubnetGroupName
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBSubnetGroupName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
