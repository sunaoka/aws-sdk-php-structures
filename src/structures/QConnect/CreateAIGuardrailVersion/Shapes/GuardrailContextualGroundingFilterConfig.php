<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUNDING'|'RELEVANCE' $type
 * @property double $threshold
 */
class GuardrailContextualGroundingFilterConfig extends Shape
{
    /**
     * @param array{
     *     type: 'GROUNDING'|'RELEVANCE',
     *     threshold: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
