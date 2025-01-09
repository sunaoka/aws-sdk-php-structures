<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $modifiedTime
 */
class CreateAIGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
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
