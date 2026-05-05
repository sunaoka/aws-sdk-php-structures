<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONATA' $Runtime
 * @property array<string, string>|null $Output
 * @property list<FunctionRef> $FunctionList
 * @property int $TimeoutMilliseconds
 */
class SequentialExecutorConfiguration extends Shape
{
    /**
     * @param array{
     *     Runtime: 'JSONATA',
     *     Output?: array<string, string>|null,
     *     FunctionList: list<FunctionRef>,
     *     TimeoutMilliseconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
