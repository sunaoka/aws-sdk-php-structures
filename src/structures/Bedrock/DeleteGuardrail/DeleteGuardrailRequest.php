<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string|null $guardrailVersion
 */
class DeleteGuardrailRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     guardrailVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
