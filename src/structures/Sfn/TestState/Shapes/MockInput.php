<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $result
 * @property MockErrorOutput|null $errorOutput
 * @property 'STRICT'|'PRESENT'|'NONE'|null $fieldValidationMode
 */
class MockInput extends Shape
{
    /**
     * @param array{
     *     result?: string|null,
     *     errorOutput?: MockErrorOutput|null,
     *     fieldValidationMode?: 'STRICT'|'PRESENT'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
