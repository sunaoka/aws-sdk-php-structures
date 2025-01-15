<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateGlobalSecondaryIndexAction|null $Update
 * @property CreateGlobalSecondaryIndexAction|null $Create
 * @property DeleteGlobalSecondaryIndexAction|null $Delete
 */
class GlobalSecondaryIndexUpdate extends Shape
{
    /**
     * @param array{
     *     Update?: UpdateGlobalSecondaryIndexAction|null,
     *     Create?: CreateGlobalSecondaryIndexAction|null,
     *     Delete?: DeleteGlobalSecondaryIndexAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
