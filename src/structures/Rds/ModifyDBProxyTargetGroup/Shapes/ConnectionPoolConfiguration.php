<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxConnectionsPercent
 * @property int $MaxIdleConnectionsPercent
 * @property int $ConnectionBorrowTimeout
 * @property list<string> $SessionPinningFilters
 * @property string $InitQuery
 */
class ConnectionPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxConnectionsPercent?: int,
     *     MaxIdleConnectionsPercent?: int,
     *     ConnectionBorrowTimeout?: int,
     *     SessionPinningFilters?: list<string>,
     *     InitQuery?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
