<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UtteranceText'|'UtteranceState' $name
 * @property string $value
 */
class AnalyticsUtteranceGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'UtteranceText'|'UtteranceState',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
