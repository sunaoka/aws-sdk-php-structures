<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RetrieveAndGenerateInput $input
 * @property Shapes\RetrieveAndGenerateConfiguration|null $retrieveAndGenerateConfiguration
 * @property Shapes\RetrieveAndGenerateSessionConfiguration|null $sessionConfiguration
 * @property string|null $sessionId
 */
class RetrieveAndGenerateStreamRequest extends Request
{
    /**
     * @param array{
     *     input: Shapes\RetrieveAndGenerateInput,
     *     retrieveAndGenerateConfiguration?: Shapes\RetrieveAndGenerateConfiguration|null,
     *     sessionConfiguration?: Shapes\RetrieveAndGenerateSessionConfiguration|null,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
