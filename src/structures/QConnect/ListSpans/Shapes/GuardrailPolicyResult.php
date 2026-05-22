<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTENT_FILTER'|'TOPIC'|'WORD'|'SENSITIVE_INFORMATION_PII'|'SENSITIVE_INFORMATION_REGEX'|'CONTEXTUAL_GROUNDING' $policyType
 * @property 'NONE'|'BLOCKED'|'MASKED' $action
 * @property string|null $details
 */
class GuardrailPolicyResult extends Shape
{
    /**
     * @param array{
     *     policyType: 'CONTENT_FILTER'|'TOPIC'|'WORD'|'SENSITIVE_INFORMATION_PII'|'SENSITIVE_INFORMATION_REGEX'|'CONTEXTUAL_GROUNDING',
     *     action: 'NONE'|'BLOCKED'|'MASKED',
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
