<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentName
 */
class InvokedIntentSample extends Shape
{
    /**
     * @param array{intentName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
