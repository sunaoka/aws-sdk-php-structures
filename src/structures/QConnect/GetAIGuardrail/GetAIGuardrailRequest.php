<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiGuardrailId
 */
class GetAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiGuardrailId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
