<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUNDING'|'RELEVANCE' $type
 * @property double $threshold
 * @property 'BLOCK'|'NONE'|null $action
 * @property bool|null $enabled
 */
class GuardrailContextualGroundingFilterConfig extends Shape
{
    /**
     * @param array{
     *     type: 'GROUNDING'|'RELEVANCE',
     *     threshold: double,
     *     action?: 'BLOCK'|'NONE'|null,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
