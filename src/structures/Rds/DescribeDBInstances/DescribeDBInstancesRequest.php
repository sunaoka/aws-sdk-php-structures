<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBInstanceIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBInstancesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
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
