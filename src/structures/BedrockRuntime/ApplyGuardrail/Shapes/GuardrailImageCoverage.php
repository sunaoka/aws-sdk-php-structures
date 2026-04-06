<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $guarded
 * @property int|null $total
 */
class GuardrailImageCoverage extends Shape
{
    /**
     * @param array{
     *     guarded?: int|null,
     *     total?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
