<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINKED_ACCOUNT' $key
 * @property list<string> $values
 */
class DimensionValues extends Shape
{
    /**
     * @param array{
     *     key: 'LINKED_ACCOUNT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
