<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateRetrievalInstruction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $retrievalInstructionId
 * @property Shapes\RetrievalInstructionContent $instruction
 * @property string|null $description
 */
class UpdateRetrievalInstructionRequest extends Request
{
    /**
     * @param array{
     *     retrievalInstructionId: string,
     *     instruction: Shapes\RetrievalInstructionContent,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
