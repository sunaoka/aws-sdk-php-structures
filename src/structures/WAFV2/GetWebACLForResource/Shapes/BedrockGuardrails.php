<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DisableBedrockGuardrails|null $Disable
 * @property BedrockGuardrailsRequestOnly|null $ProtectRequestOnly
 * @property BedrockGuardrailsRequestAndResponse|null $ProtectRequestAndResponse
 */
class BedrockGuardrails extends Shape
{
    /**
     * @param array{
     *     Disable?: DisableBedrockGuardrails|null,
     *     ProtectRequestOnly?: BedrockGuardrailsRequestOnly|null,
     *     ProtectRequestAndResponse?: BedrockGuardrailsRequestAndResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
