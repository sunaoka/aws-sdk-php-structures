<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentName'|'IntentEndState'|'IntentLevel' $name
 */
class AnalyticsIntentGroupBySpecification extends Shape
{
    /**
     * @param array{name: 'IntentName'|'IntentEndState'|'IntentLevel'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
