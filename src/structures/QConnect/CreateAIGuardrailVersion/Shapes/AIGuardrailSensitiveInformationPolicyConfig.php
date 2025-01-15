<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntityConfig>|null $piiEntitiesConfig
 * @property list<GuardrailRegexConfig>|null $regexesConfig
 */
class AIGuardrailSensitiveInformationPolicyConfig extends Shape
{
    /**
     * @param array{
     *     piiEntitiesConfig?: list<GuardrailPiiEntityConfig>|null,
     *     regexesConfig?: list<GuardrailRegexConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
