<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailChecksContentFilterConfig|null $contentFilter
 * @property GuardrailChecksPromptAttackConfig|null $promptAttack
 * @property GuardrailChecksSensitiveInformationConfig|null $sensitiveInformation
 */
class GuardrailChecksConfig extends Shape
{
    /**
     * @param array{
     *     contentFilter?: GuardrailChecksContentFilterConfig|null,
     *     promptAttack?: GuardrailChecksPromptAttackConfig|null,
     *     sensitiveInformation?: GuardrailChecksSensitiveInformationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
