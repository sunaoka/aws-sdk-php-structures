<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expectedAgentPrompt
 * @property string $actualAgentPrompt
 * @property ExecutionErrorDetails $errorDetails
 * @property string $actualElicitedSlot
 * @property string $actualIntent
 */
class AgentTurnResult extends Shape
{
    /**
     * @param array{
     *     expectedAgentPrompt: string,
     *     actualAgentPrompt?: string,
     *     errorDetails?: ExecutionErrorDetails,
     *     actualElicitedSlot?: string,
     *     actualIntent?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
