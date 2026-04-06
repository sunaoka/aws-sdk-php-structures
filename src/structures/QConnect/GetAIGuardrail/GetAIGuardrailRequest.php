<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 */
class GetAIGuardrailRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
     *     assistantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
