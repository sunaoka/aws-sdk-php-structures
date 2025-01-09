<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntityConfig> $piiEntitiesConfig
 * @property list<GuardrailRegexConfig> $regexesConfig
 */
class AIGuardrailSensitiveInformationPolicyConfig extends Shape
{
    /**
     * @param array{
     *     piiEntitiesConfig?: list<GuardrailPiiEntityConfig>,
     *     regexesConfig?: list<GuardrailRegexConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
