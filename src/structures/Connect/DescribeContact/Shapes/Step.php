<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Expiry $Expiry
 * @property Expression $Expression
 * @property 'ACTIVE'|'INACTIVE'|'JOINED'|'EXPIRED' $Status
 */
class Step extends Shape
{
    /**
     * @param array{
     *     Expiry?: Expiry,
     *     Expression?: Expression,
     *     Status?: 'ACTIVE'|'INACTIVE'|'JOINED'|'EXPIRED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
