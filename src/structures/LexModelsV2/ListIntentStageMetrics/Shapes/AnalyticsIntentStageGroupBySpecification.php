<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentStageName'|'SwitchedToIntent' $name
 */
class AnalyticsIntentStageGroupBySpecification extends Shape
{
    /**
     * @param array{name: 'IntentStageName'|'SwitchedToIntent'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
