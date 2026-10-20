<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $retrievalInstructionId
 * @property string|null $version
 */
class AgenticRetrieveInstructionConfiguration extends Shape
{
    /**
     * @param array{
     *     retrievalInstructionId: string,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
