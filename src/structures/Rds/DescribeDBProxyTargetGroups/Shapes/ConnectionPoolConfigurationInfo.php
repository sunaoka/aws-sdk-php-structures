<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxConnectionsPercent
 * @property int|null $MaxIdleConnectionsPercent
 * @property int|null $ConnectionBorrowTimeout
 * @property list<string>|null $SessionPinningFilters
 * @property string|null $InitQuery
 */
class ConnectionPoolConfigurationInfo extends Shape
{
    /**
     * @param array{
     *     MaxConnectionsPercent?: int|null,
     *     MaxIdleConnectionsPercent?: int|null,
     *     ConnectionBorrowTimeout?: int|null,
     *     SessionPinningFilters?: list<string>|null,
     *     InitQuery?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
