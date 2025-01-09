<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailPiiEntity> $piiEntities
 * @property list<GuardrailRegex> $regexes
 */
class GuardrailSensitiveInformationPolicy extends Shape
{
    /**
     * @param array{
     *     piiEntities?: list<GuardrailPiiEntity>,
     *     regexes?: list<GuardrailRegex>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
