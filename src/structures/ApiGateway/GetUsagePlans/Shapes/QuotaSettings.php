<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $limit
 * @property int|null $offset
 * @property 'DAY'|'WEEK'|'MONTH'|null $period
 */
class QuotaSettings extends Shape
{
    /**
     * @param array{
     *     limit?: int|null,
     *     offset?: int|null,
     *     period?: 'DAY'|'WEEK'|'MONTH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
