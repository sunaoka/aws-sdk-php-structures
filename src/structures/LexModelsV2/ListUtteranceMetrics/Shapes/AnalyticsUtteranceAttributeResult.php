<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lastUsedIntent
 */
class AnalyticsUtteranceAttributeResult extends Shape
{
    /**
     * @param array{lastUsedIntent?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
