<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiPromptId
 */
class GetAIPromptRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiPromptId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
