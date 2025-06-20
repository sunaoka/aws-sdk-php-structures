<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailTopicConfig> $topicsConfig
 * @property GuardrailTopicsTierConfig|null $tierConfig
 */
class GuardrailTopicPolicyConfig extends Shape
{
    /**
     * @param array{
     *     topicsConfig: list<GuardrailTopicConfig>,
     *     tierConfig?: GuardrailTopicsTierConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
