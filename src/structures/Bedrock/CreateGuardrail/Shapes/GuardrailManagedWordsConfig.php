<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROFANITY' $type
 * @property 'BLOCK'|'NONE'|null $inputAction
 * @property 'BLOCK'|'NONE'|null $outputAction
 * @property bool|null $inputEnabled
 * @property bool|null $outputEnabled
 */
class GuardrailManagedWordsConfig extends Shape
{
    /**
     * @param array{
     *     type: 'PROFANITY',
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
