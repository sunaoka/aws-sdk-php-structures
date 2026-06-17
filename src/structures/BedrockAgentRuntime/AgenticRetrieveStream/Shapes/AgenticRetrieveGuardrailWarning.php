<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERVENED'|'NONE' $action
 * @property string $id
 * @property string|null $message
 * @property string $version
 */
class AgenticRetrieveGuardrailWarning extends Shape
{
    /**
     * @param array{
     *     action: 'INTERVENED'|'NONE',
     *     id: string,
     *     message?: string|null,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
