<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UtteranceText'|'UtteranceState'|null $name
 * @property string|null $value
 */
class AnalyticsUtteranceGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'UtteranceText'|'UtteranceState'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
