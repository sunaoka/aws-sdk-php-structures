<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputPrompt $input
 * @property string $targetModelId
 */
class OptimizePromptRequest extends Request
{
    /**
     * @param array{
     *     input: Shapes\InputPrompt,
     *     targetModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
