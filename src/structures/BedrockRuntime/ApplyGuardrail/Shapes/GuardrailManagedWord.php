<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $match
 * @property 'PROFANITY' $type
 * @property 'BLOCKED'|'NONE' $action
 * @property bool|null $detected
 */
class GuardrailManagedWord extends Shape
{
    /**
     * @param array{
     *     match: string,
     *     type: 'PROFANITY',
     *     action: 'BLOCKED'|'NONE',
     *     detected?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
