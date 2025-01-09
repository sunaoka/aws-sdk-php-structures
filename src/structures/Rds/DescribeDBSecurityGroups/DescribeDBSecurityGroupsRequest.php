<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSecurityGroupName
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBSecurityGroupName?: string,
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
