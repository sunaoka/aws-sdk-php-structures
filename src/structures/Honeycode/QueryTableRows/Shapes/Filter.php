<?php

namespace Sunaoka\Aws\Structures\Honeycode\QueryTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $formula
 * @property string|null $contextRowId
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     formula: string,
     *     contextRowId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
