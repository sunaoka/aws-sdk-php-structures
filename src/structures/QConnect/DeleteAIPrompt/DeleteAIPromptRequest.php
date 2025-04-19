<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiPromptId
 */
class DeleteAIPromptRequest extends Request
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
