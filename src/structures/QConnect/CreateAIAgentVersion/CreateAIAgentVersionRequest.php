<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $modifiedTime
 */
class CreateAIAgentVersionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
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
