<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetRetrievalInstruction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $retrievalInstructionId
 * @property string|null $retrievalInstructionVersion
 */
class GetRetrievalInstructionRequest extends Request
{
    /**
     * @param array{
     *     retrievalInstructionId: string,
     *     retrievalInstructionVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
