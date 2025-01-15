<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalySubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property 'EMAIL'|'SNS'|null $Type
 * @property 'CONFIRMED'|'DECLINED'|null $Status
 */
class Subscriber extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Type?: 'EMAIL'|'SNS'|null,
     *     Status?: 'CONFIRMED'|'DECLINED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
