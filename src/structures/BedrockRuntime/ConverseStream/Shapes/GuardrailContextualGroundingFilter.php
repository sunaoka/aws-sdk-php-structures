<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUNDING'|'RELEVANCE' $type
 * @property double $threshold
 * @property double $score
 * @property 'BLOCKED'|'NONE' $action
 */
class GuardrailContextualGroundingFilter extends Shape
{
    /**
     * @param array{
     *     type: 'GROUNDING'|'RELEVANCE',
     *     threshold: double,
     *     score: double,
     *     action: 'BLOCKED'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
