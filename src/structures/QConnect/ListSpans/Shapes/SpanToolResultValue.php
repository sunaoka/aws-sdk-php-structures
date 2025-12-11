<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property list<SpanMessageValue> $values
 * @property string|null $error
 */
class SpanToolResultValue extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     values: list<SpanMessageValue>,
     *     error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
