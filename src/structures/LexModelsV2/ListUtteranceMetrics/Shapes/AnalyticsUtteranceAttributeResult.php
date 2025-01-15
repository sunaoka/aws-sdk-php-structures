<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastUsedIntent
 */
class AnalyticsUtteranceAttributeResult extends Shape
{
    /**
     * @param array{lastUsedIntent?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
