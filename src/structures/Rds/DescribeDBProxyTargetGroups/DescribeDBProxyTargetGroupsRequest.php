<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string|null $TargetGroupName
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 */
class DescribeDBProxyTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     TargetGroupName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
