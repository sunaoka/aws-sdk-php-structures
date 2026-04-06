<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 */
class CreateAIAgentVersionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
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
