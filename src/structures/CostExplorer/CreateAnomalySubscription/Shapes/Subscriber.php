<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalySubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property 'EMAIL'|'SNS' $Type
 * @property 'CONFIRMED'|'DECLINED' $Status
 */
class Subscriber extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Type?: 'EMAIL'|'SNS',
     *     Status?: 'CONFIRMED'|'DECLINED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
