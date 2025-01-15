<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntityConfig>|null $piiEntitiesConfig
 * @property list<GuardrailRegexConfig>|null $regexesConfig
 */
class GuardrailSensitiveInformationPolicyConfig extends Shape
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
