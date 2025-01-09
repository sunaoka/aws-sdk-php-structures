<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntityFilter> $piiEntities
 * @property list<GuardrailRegexFilter> $regexes
 */
class GuardrailSensitiveInformationPolicyAssessment extends Shape
{
    /**
     * @param array{
     *     piiEntities?: list<GuardrailPiiEntityFilter>,
     *     regexes?: list<GuardrailRegexFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
