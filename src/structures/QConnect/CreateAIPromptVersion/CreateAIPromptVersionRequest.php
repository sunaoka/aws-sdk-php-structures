<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 */
class CreateAIPromptVersionRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     clientToken?: string|null,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
