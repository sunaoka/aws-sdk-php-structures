<?php

namespace Sunaoka\Aws\Structures\Billing\CreateBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property list<string> $values
 */
class CostCategoryValues extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
