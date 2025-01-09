<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int<20, 100> $MaxRecords
 */
class DescribeDBProxiesRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int<20, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
