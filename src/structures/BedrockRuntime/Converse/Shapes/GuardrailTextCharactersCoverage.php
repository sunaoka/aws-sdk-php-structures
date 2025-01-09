<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $guarded
 * @property int $total
 */
class GuardrailTextCharactersCoverage extends Shape
{
    /**
     * @param array{
     *     guarded?: int,
     *     total?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
