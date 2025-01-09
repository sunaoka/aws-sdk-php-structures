<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $originalValue
 * @property string $interpretedValue
 * @property list<string> $resolvedValues
 */
class Value extends Shape
{
    /**
     * @param array{
     *     originalValue?: string,
     *     interpretedValue: string,
     *     resolvedValues?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
