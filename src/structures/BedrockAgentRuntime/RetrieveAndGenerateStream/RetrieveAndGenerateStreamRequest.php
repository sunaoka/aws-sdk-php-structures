<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $sessionId
 * @property Shapes\RetrieveAndGenerateInput $input
 * @property Shapes\RetrieveAndGenerateConfiguration|null $retrieveAndGenerateConfiguration
 * @property Shapes\RetrieveAndGenerateSessionConfiguration|null $sessionConfiguration
 */
class RetrieveAndGenerateStreamRequest extends Request
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     input: Shapes\RetrieveAndGenerateInput,
     *     retrieveAndGenerateConfiguration?: Shapes\RetrieveAndGenerateConfiguration|null,
     *     sessionConfiguration?: Shapes\RetrieveAndGenerateSessionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
