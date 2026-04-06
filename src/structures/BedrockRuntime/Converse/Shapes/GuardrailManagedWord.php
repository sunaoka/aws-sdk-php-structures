<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $match
 * @property 'PROFANITY' $type
 * @property 'BLOCKED' $action
 */
class GuardrailManagedWord extends Shape
{
    /**
     * @param array{
     *     match: string,
     *     type: 'PROFANITY',
     *     action: 'BLOCKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
