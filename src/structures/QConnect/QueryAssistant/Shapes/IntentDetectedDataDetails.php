<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intent
 * @property string $intentId
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $relevanceLevel
 */
class IntentDetectedDataDetails extends Shape
{
    /**
     * @param array{
     *     intent: string,
     *     intentId: string,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
