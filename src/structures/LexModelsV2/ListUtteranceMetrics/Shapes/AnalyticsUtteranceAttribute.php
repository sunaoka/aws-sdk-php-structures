<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LastUsedIntent' $name
 */
class AnalyticsUtteranceAttribute extends Shape
{
    /**
     * @param array{name: 'LastUsedIntent'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
