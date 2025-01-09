<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RetrieveAndGenerateInput $input
 * @property Shapes\RetrieveAndGenerateConfiguration $retrieveAndGenerateConfiguration
 * @property Shapes\RetrieveAndGenerateSessionConfiguration $sessionConfiguration
 * @property string $sessionId
 */
class RetrieveAndGenerateRequest extends Request
{
    /**
     * @param array{
     *     input: Shapes\RetrieveAndGenerateInput,
     *     retrieveAndGenerateConfiguration?: Shapes\RetrieveAndGenerateConfiguration,
     *     sessionConfiguration?: Shapes\RetrieveAndGenerateSessionConfiguration,
     *     sessionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
