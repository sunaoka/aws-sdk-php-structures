<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBSecurityGroupName
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBSecurityGroupName?: string|null,
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
