<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAccountUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $limit
 * @property double $usage
 */
class UsageMetric extends Shape
{
    /**
     * @param array{
     *     limit: int,
     *     usage: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
