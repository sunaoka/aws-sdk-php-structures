<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UtteranceText'|'UtteranceState' $name
 */
class AnalyticsUtteranceGroupBySpecification extends Shape
{
    /**
     * @param array{name: 'UtteranceText'|'UtteranceState'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
