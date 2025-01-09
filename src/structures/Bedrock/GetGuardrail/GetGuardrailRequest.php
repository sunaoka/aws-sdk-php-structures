<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 */
class GetGuardrailRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     guardrailVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
