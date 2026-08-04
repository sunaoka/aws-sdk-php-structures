<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateVectorIndexAction|null $Create
 * @property DeleteVectorIndexAction|null $Delete
 */
class VectorIndexUpdate extends Shape
{
    /**
     * @param array{
     *     Create?: CreateVectorIndexAction|null,
     *     Delete?: DeleteVectorIndexAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
