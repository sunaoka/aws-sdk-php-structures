<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContentFilterConfig> $filtersConfig
 * @property GuardrailContentFiltersTierConfig|null $tierConfig
 */
class GuardrailContentPolicyConfig extends Shape
{
    /**
     * @param array{
     *     filtersConfig: list<GuardrailContentFilterConfig>,
     *     tierConfig?: GuardrailContentFiltersTierConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
