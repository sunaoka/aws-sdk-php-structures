<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiPromptId
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string|null $clientToken
 */
class CreateAIPromptVersionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiPromptId: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
