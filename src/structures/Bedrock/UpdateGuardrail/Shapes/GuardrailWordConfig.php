<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property 'BLOCK'|'NONE'|null $inputAction
 * @property 'BLOCK'|'NONE'|null $outputAction
 * @property bool|null $inputEnabled
 * @property bool|null $outputEnabled
 */
class GuardrailWordConfig extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     inputAction?: 'BLOCK'|'NONE'|null,
     *     outputAction?: 'BLOCK'|'NONE'|null,
     *     inputEnabled?: bool|null,
     *     outputEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
