<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 */
class CreateAIGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
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
