<?php

namespace Sunaoka\Aws\Structures\RTBFabric\RejectLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property list<string> $values
 */
class FilterCriterion extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
