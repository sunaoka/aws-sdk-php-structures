<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $threshold
 * @property 'GROUNDING'|'RELEVANCE' $type
 */
class GuardrailContextualGroundingFilterConfig extends Shape
{
    /**
     * @param array{
     *     threshold: double,
     *     type: 'GROUNDING'|'RELEVANCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
