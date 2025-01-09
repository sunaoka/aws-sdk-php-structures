<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $TargetGroupName
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeDBProxyTargetsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     TargetGroupName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
