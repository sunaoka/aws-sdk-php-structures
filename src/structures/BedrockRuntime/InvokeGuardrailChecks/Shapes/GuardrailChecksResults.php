<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailChecksContentFilterResult|null $contentFilter
 * @property GuardrailChecksPromptAttackResult|null $promptAttack
 * @property GuardrailChecksSensitiveInformationResult|null $sensitiveInformation
 */
class GuardrailChecksResults extends Shape
{
    /**
     * @param array{
     *     contentFilter?: GuardrailChecksContentFilterResult|null,
     *     promptAttack?: GuardrailChecksPromptAttackResult|null,
     *     sensitiveInformation?: GuardrailChecksSensitiveInformationResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
