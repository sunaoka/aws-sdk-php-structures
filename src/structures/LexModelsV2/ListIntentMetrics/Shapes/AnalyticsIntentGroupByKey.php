<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentName'|'IntentEndState'|'IntentLevel' $name
 * @property string $value
 */
class AnalyticsIntentGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'IntentName'|'IntentEndState'|'IntentLevel',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
