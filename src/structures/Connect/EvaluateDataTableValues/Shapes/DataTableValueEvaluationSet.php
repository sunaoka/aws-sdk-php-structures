<?php

namespace Sunaoka\Aws\Structures\Connect\EvaluateDataTableValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue>|null $PrimaryValues
 * @property list<string> $AttributeNames
 */
class DataTableValueEvaluationSet extends Shape
{
    /**
     * @param array{
     *     PrimaryValues?: list<PrimaryValue>|null,
     *     AttributeNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
