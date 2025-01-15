<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntityFilter>|null $piiEntities
 * @property list<GuardrailRegexFilter>|null $regexes
 */
class GuardrailSensitiveInformationPolicyAssessment extends Shape
{
    /**
     * @param array{
     *     piiEntities?: list<GuardrailPiiEntityFilter>|null,
     *     regexes?: list<GuardrailRegexFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
