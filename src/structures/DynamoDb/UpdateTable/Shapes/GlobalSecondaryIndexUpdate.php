<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateGlobalSecondaryIndexAction $Update
 * @property CreateGlobalSecondaryIndexAction $Create
 * @property DeleteGlobalSecondaryIndexAction $Delete
 */
class GlobalSecondaryIndexUpdate extends Shape
{
    /**
     * @param array{
     *     Update?: UpdateGlobalSecondaryIndexAction,
     *     Create?: CreateGlobalSecondaryIndexAction,
     *     Delete?: DeleteGlobalSecondaryIndexAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
