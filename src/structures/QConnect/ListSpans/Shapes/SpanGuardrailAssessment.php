<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailId
 * @property string $guardrailName
 * @property 'INPUT'|'OUTPUT' $source
 * @property 'NONE'|'BLOCKED'|'MASKED' $action
 * @property list<GuardrailPolicyResult>|null $policies
 */
class SpanGuardrailAssessment extends Shape
{
    /**
     * @param array{
     *     guardrailId: string,
     *     guardrailName: string,
     *     source: 'INPUT'|'OUTPUT',
     *     action: 'NONE'|'BLOCKED'|'MASKED',
     *     policies?: list<GuardrailPolicyResult>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
