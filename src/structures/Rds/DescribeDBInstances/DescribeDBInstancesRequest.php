<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBInstancesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
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
