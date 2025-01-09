<?php

namespace Sunaoka\Aws\Structures\Route53\GetReusableDelegationSetLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MAX_ZONES_BY_REUSABLE_DELEGATION_SET' $Type
 * @property int<1, max> $Value
 */
class ReusableDelegationSetLimit extends Shape
{
    /**
     * @param array{
     *     Type: 'MAX_ZONES_BY_REUSABLE_DELEGATION_SET',
     *     Value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
