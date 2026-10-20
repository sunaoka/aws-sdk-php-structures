<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateRetrievalInstructionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $retrievalInstructionId
 * @property string|null $description
 * @property string|null $clientToken
 */
class CreateRetrievalInstructionVersionRequest extends Request
{
    /**
     * @param array{
     *     retrievalInstructionId: string,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
