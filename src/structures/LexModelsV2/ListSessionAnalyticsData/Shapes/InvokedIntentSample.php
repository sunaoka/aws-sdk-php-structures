<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 */
class InvokedIntentSample extends Shape
{
    /**
     * @param array{intentName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
