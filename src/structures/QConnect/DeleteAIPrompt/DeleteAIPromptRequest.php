<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 */
class DeleteAIPromptRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
