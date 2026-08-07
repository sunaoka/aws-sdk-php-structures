<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONATA' $Runtime
 * @property array<string, string> $Output
 * @property list<FunctionRef> $FunctionList
 * @property int $TimeoutMilliseconds
 * @property int $MaxConcurrency
 */
class ConcurrentExecutorConfiguration extends Shape
{
    /**
     * @param array{
     *     Runtime: 'JSONATA',
     *     Output: array<string, string>,
     *     FunctionList: list<FunctionRef>,
     *     TimeoutMilliseconds: int,
     *     MaxConcurrency: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
