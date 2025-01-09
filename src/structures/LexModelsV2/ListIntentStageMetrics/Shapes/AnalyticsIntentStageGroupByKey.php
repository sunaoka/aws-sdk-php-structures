<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentStageName'|'SwitchedToIntent' $name
 * @property string $value
 */
class AnalyticsIntentStageGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'IntentStageName'|'SwitchedToIntent',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
