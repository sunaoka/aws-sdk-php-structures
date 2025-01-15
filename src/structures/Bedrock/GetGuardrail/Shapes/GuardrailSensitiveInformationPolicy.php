<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntity>|null $piiEntities
 * @property list<GuardrailRegex>|null $regexes
 */
class GuardrailSensitiveInformationPolicy extends Shape
{
    /**
     * @param array{
     *     piiEntities?: list<GuardrailPiiEntity>|null,
     *     regexes?: list<GuardrailRegex>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
