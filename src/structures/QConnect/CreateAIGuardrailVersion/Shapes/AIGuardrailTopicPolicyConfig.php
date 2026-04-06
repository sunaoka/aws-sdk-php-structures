<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailTopicConfig> $topicsConfig
 */
class AIGuardrailTopicPolicyConfig extends Shape
{
    /**
     * @param array{topicsConfig: list<GuardrailTopicConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
