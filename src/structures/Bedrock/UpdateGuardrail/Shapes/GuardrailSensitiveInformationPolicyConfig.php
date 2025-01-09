<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntityConfig> $piiEntitiesConfig
 * @property list<GuardrailRegexConfig> $regexesConfig
 */
class GuardrailSensitiveInformationPolicyConfig extends Shape
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
