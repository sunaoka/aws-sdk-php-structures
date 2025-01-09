<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $modifiedTime
 */
class CreateAIPromptVersionRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     clientToken?: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
