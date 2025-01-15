<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expectedAgentPrompt
 * @property string|null $actualAgentPrompt
 * @property ExecutionErrorDetails|null $errorDetails
 * @property string|null $actualElicitedSlot
 * @property string|null $actualIntent
 */
class AgentTurnResult extends Shape
{
    /**
     * @param array{
     *     expectedAgentPrompt: string,
     *     actualAgentPrompt?: string|null,
     *     errorDetails?: ExecutionErrorDetails|null,
     *     actualElicitedSlot?: string|null,
     *     actualIntent?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
