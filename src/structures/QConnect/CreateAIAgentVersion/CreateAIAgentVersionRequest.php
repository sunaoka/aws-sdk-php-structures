<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiAgentId
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string|null $clientToken
 */
class CreateAIAgentVersionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiAgentId: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
