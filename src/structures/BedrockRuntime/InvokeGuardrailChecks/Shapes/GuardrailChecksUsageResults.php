<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailChecksContentFilterUsage|null $contentFilter
 * @property GuardrailChecksPromptAttackUsage|null $promptAttack
 * @property GuardrailChecksSensitiveInformationUsage|null $sensitiveInformation
 */
class GuardrailChecksUsageResults extends Shape
{
    /**
     * @param array{
     *     contentFilter?: GuardrailChecksContentFilterUsage|null,
     *     promptAttack?: GuardrailChecksPromptAttackUsage|null,
     *     sensitiveInformation?: GuardrailChecksSensitiveInformationUsage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
