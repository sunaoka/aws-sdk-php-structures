<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $originalValue
 * @property string $interpretedValue
 * @property list<string>|null $resolvedValues
 */
class Value extends Shape
{
    /**
     * @param array{
     *     originalValue?: string|null,
     *     interpretedValue: string,
     *     resolvedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
