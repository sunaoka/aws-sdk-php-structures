<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateRetrievalInstruction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property Shapes\RetrievalInstructionContent $instruction
 * @property string|null $description
 * @property string|null $customerEncryptionKeyArn
 * @property array<string, string>|null $tags
 */
class CreateRetrievalInstructionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     instruction: Shapes\RetrievalInstructionContent,
     *     description?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
