<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string $name
 * @property JSONDocument $arguments
 */
class SpanToolUseValue extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     name: string,
     *     arguments: JSONDocument
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
