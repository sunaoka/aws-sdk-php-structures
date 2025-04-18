<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiGuardrailId
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string|null $clientToken
 */
class CreateAIGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiGuardrailId: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
