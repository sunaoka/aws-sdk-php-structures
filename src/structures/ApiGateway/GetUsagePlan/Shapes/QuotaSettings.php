<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $limit
 * @property int $offset
 * @property 'DAY'|'WEEK'|'MONTH' $period
 */
class QuotaSettings extends Shape
{
    /**
     * @param array{
     *     limit?: int,
     *     offset?: int,
     *     period?: 'DAY'|'WEEK'|'MONTH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
