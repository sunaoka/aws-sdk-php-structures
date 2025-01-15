<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentName'|'IntentEndState'|'IntentLevel'|null $name
 * @property string|null $value
 */
class AnalyticsIntentGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'IntentName'|'IntentEndState'|'IntentLevel'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
