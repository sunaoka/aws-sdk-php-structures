<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutEnforcedGuardrailConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $configId
 * @property Shapes\AccountEnforcedGuardrailInferenceInputConfiguration $guardrailInferenceConfig
 */
class PutEnforcedGuardrailConfigurationRequest extends Request
{
    /**
     * @param array{
     *     configId?: string|null,
     *     guardrailInferenceConfig: Shapes\AccountEnforcedGuardrailInferenceInputConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
